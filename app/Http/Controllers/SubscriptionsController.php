<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Subscriptions;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

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
        return view('services', compact('subscriptions'));
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

    if ($user->orders) {
        return back()->with('error', 'You already have an active subscription.');
    }

    return view('createorder', compact('subscriptions'));
}

public function orderstore(Request $request, Subscriptions $subscriptions)
{
$request->validate([
    'clientName' => 'required',
    'address' => 'required',
    'phone' => 'required',
    'email' => 'required|email',
]);

// Получаем данные о подписке из таблицы subscriptions
$totalPrice = $subscriptions->price;
$subEnd = now()->addDays($subscriptions->days);


// Создаем новую запись в таблице orders
$data = [
    'clientName' => $request->clientName,
    'orderedSub' => $subscriptions->name,
    'created_at' => now(),
    'updated_at' => now(),
    'totalPrice' => $totalPrice,
    'address' => $request->address,
    'phone' => $request->phone,
    'email' => $request->email,
    'subEnd' => $subEnd,
    'user_id' => Auth::id(),
    'sub_id' => $subscriptions->id,
];

$qrCode = QrCode::size(250)->generate('Client: ' . $request->clientName . ', Subscription end: ' . $request->subEnd);
$data['qr'] = time() . '.svg';
file_put_contents(public_path('qr-codes/' . $data['qr']), $qrCode);

Orders::create($data);

return redirect('/services')->with('success', 'Order created successfully. You can see QR-code in your profile.');
}





}
