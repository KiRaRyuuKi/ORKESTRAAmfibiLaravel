<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->isAdministrator) {
                return redirect()->intended('/administrator/dashboard');
            } else {
                Auth::logout();
                return redirect()->route('administrator.login')->withErrors(['message' => 'Anda bukan admin.']);
            }
        }

        return redirect()->route('administrator.login')->withErrors(['message' => 'Email atau password salah.']);
    }
}
