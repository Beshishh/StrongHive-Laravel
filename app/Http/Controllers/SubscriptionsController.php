<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Subscriptions;
use App\Models\Orders;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Checkout\Session;
use Stripe\Customer;
use Stripe\Stripe;

class SubscriptionsController extends Controller
{
    public function index()
    {
        $subscriptions = Subscriptions::orderBy('id', 'asc')->get();
        return view('subscriptions.index', compact('subscriptions'));
    }

    public function pricelist()
    {
        $subscriptions = Subscriptions::orderBy('price', 'asc')->get();
        $schedule = Schedule::orderBy('id', 'asc')->get();
        return view('services', compact('subscriptions', 'schedule'));
    }

    public function show(Subscriptions $subscriptions)
    {
        return view('subscriptions.detail', compact('subscriptions'));
    }


    public function create()
    {
        return view('subscriptions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'days' => 'required',
        ]);
        $data = $request->all();
        Subscriptions::create($data);
        return redirect('/subscriptionslist');
    }


    public function edit(Subscriptions $subscriptions)
    {
        {
            return view('subscriptions.edit', compact('subscriptions'));
        }
    }

    public function update(Request $request, Subscriptions $subscriptions)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'days' => 'required',
        ]);
        $data = $request->all();
        $subscriptions->update($data);
        return redirect('/subscriptionslist');
    }

    public function destroy(Subscriptions $subscriptions)
    {
        $subscriptions->delete();
        return redirect('/subscriptionslist');
    }

    public function orderscreate(Subscriptions $subscriptions)
    {
        $user = Auth::user();

        $subscriptionsData = Subscriptions::orderBy('id', 'asc')->get();
        $schedule = Schedule::orderBy('id', 'asc')->get();

        if ($user->orders) {
            return back()->with('error', 'You already have an active subscription.');
        }

        return view('createorder', compact('subscriptions', 'subscriptionsData', 'schedule'));
    }

    public function orderstore(Request $request, Subscriptions $subscriptions)
    {
        $request->validate([
            'clientName' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        Stripe::setApiKey(config("stripe.sk"));

        $customer = Customer::create([
            "address" => [
                "line1" => $request->address,
            ],
            "email" => $request->email,
            "name" => $request->clientName,
            "phone" => $request->phone,
        ]);

        $session = Session::create([
            "line_items" => [[
                "price_data" => [
                    "currency" => "eur",
                    "product_data" => [
                        "name" => $subscriptions->name,
                    ],
                    "unit_amount" => $subscriptions->price * 100,
                ],
                "quantity" => 1,
            ]],
            "mode" => "payment",
            "success_url" => route("success-payment") . "?subscription=" . $subscriptions->id . "&clientName=" . $request->clientName . "&address=" . $request->address . "&phone=" . $request->phone . "&email=" . $request->email,
            "cancel_url" => route("createorder", ["subscriptions" => $subscriptions->id]),
            "payment_method_types" => ["card"],
            "customer" => $customer->id,
            "locale" => app()->getLocale(),
        ]);

        return redirect($session->url);
    }

    public function successPayment()
    {
        $schedule = Schedule::orderBy('id', 'asc')->get();

        if (!isset($_GET['subscription']) || !isset($_GET['address']) || !isset($_GET['phone']) || !isset($_GET['email']) || !isset($_GET['clientName'])) {
            return redirect('/services')->with('error', 'You have not chosen any subscription.');
        }

        if (Orders::where('user_id', Auth::id())->where('sub_id', $_GET['subscription'])->first()) {
            return view('subscriptions.success-payment', compact('schedule'));
        }

        $subscription = Subscriptions::find($_GET['subscription']);

        $totalPrice = $subscription->price;
        $subEnd = now()->addDays($subscription->days);

        $data = [
            'clientName' => $_GET['clientName'],
            'orderedSub' => $subscription->name,
            'created_at' => now(),
            'updated_at' => now(),
            'totalPrice' => $totalPrice,
            'address' => $_GET['address'],
            'phone' => $_GET['phone'],
            'email' => $_GET['email'],
            'subEnd' => $subEnd,
            'user_id' => Auth::id(),
            'sub_id' => $subscription->id,
        ];

        $qrCode = QrCode::size(250)->generate('Client: ' . $_GET['clientName'] . ', Subscription end: ' . $subEnd);
        $data['qr'] = time() . '.svg';
        file_put_contents(public_path('qr-codes/' . $data['qr']), $qrCode);

        Orders::create($data);

        return view('subscriptions.success-payment', compact('schedule'));
    }
}
