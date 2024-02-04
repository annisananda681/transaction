<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    const NOT_ALLOWED = "are not allowed to access";
    
    public function loginAuth(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect()->intended('/')->withSuccess('Signed in');
        }
   
        return redirect('login')->withSuccess('Login details are not valid');
    }
 
    public function logOut()
    {
        Session::flush();
        Auth::logout();
   
        return redirect('login');
    }
}
