<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('manager.login');
    }

    public function login(Request $request)
    {

        Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        return redirect()->route('manager.panel');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('manager.index');
    }
}
