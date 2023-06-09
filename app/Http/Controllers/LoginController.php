<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request) {
        
        $credentials = $request->validate([
            'email'=> 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginEror', 'Login failed');
    }

    public function logout(Request $request) {
        Auth::logout();

        // untuk menonaktifkan validasi session
        $request->session()->invalidate();

        // membuat token sesion baru
        $request->session()->regenerateToken();

        // mau diarahkan kemana
        return redirect('/');
    }
}
