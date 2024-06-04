<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if ($credentials['username'] == 'admin' && $credentials['password'] == '123admin') {
            session(['logged_in' => true]);
            return redirect('/admin');
        }

        return back()->withErrors(['login_error' => 'Username atau password salah.']);
    }

    public function logout()
    {
        session()->forget('logged_in');
        return redirect('/login');
    }
}
