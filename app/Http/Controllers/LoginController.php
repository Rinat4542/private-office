<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        return redirect()->route('private.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
