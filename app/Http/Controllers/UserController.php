<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class UserController extends Controller
{
    public function index()
    {
        $role = array('admin', 'client', 'manager');
        $users = User::orderBy('id', 'asc')->get();
        return view('users.index', compact('users', 'role'));
    }
    
    
    public function search(User $users)
    {  
        if (request('search')) {
            $users = User::where('name', 'like', '%' . request('search') . '%')->get();
        } else {
            $users = User::all();
        }
    
        return view('users.index', compact('users'));
    }


    public function create()
    {
        $role = array('admin', 'manager', 'client');
        return view('users.create', compact('role'));
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'password_confirmation' => 'required',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => $request->role,
    ]);
    return redirect('/userslist');
}

public function edit(User $users)
{
    {
        $role = array('admin', 'manager', 'client');
        return view('users.edit', compact('users', 'role'));
    }
}

public function update(Request $request, User $users)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    if($request->password) {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);
        $users->update ([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
    }else{
        $users->update ([
            'name' => $request->name,
            'role' => $request->role,
        ]);
    }
    return redirect('/userslist');
}

public function destroy(User $users)
{
    $users->delete();
    return redirect('/userslist');
}

}