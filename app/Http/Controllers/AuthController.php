<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('start');
    }

    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            if(Auth::user()->role == 'admin'){
                return redirect()->intended('dashboard');
            }
            if(Auth::user()->role == 'manager'){
                return redirect()->intended('dashboard');
            }
            if(Auth::user()->role == 'client'){
                return redirect()->intended('');
            }
        }
        return redirect('login')->with('error' , 'The provided credentials do not match our records.');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
