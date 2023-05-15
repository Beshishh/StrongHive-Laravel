<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\User;
use App\Models\Orders;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Auth;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Orders::orderBy('id', 'asc')->get();
        return view('orders.index', compact('orders'));
    }

    public function show(Orders $orders)
    {
        return view('orders.detail', compact('orders'));
    }


    public function search(Orders $orders)
    {
        if (request('search')) {
            $orders = Orders::where('id', 'like', '%' . request('search') . '%')->get();
        } else {
            $orders = Orders::all();
        }

        return view('orders.index', compact('orders'));
    }


    public function create()
    {
        return view('orders.create');
    }


    public function store(Request $request)
    {
    $request->validate([
        'orderedSub' => 'required',
        'totalPrice' => 'required',
        'clientName' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'subEnd' => 'required',
    ]);

    $qrCode = QrCode::size(250)->generate('Client: ' . $request->clientName . ', Subscription end: ' . $request->subEnd);

    $data = $request->all();
    $data['qr'] = time() . '.svg';
    file_put_contents(public_path('qr-codes/' . $data['qr']), $qrCode);
    Orders::create($data);
    return redirect('/orders');
    }
    public function edit(Orders $orders)
    {
        {
            return view('orders.edit', compact('orders'));
        }
    }

    public function update(Request $request, Orders $orders)
    {
    $request->validate([
        'orderedSub' => 'required',
        'totalPrice' => 'required',
        'clientName' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'subEnd' => 'required',
        'description' => 'required',
        'qr' => 'required',
    ]);
    $data = $request->all();
    $orders->update($data);
    return redirect('/orders');
    }

    public function destroy(Orders $orders)
    {
        $qrCodePath = public_path('qr-codes/' . $orders->qr);

        if (file_exists($qrCodePath)) {
            unlink($qrCodePath);
        }
        $orders->delete();

        return redirect('/orders');
    }


    public function profileSub(){
        $id = Auth::id();
        $subStart = Orders::where('user_id', $id)->value('created_at');
        $subEnd = Orders::where('user_id', $id)->value('subEnd');
        $schedule = Schedule::orderBy('id', 'asc')->get();
        $qr = Orders::where('user_id', $id)->value('qr');

        return view('profile.index', compact(array('subStart', 'subEnd', 'qr', 'schedule')));

    }

}
