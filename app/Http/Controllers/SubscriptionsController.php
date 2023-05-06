<?php

namespace App\Http\Controllers;

use App\Models\Subscriptions;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function index()
    {
        $subscriptions = Subscriptions::orderBy('id', 'asc')->get();
        return view('subscriptions.index', compact('subscriptions'));
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

}