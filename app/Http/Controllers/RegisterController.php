<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    // cara pertama
    // public function store(Request $request) {
    //     return $request->all();
    // }

    // cara kedua
    // public function store() {
    //     return request()->all();
    // }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:255', // formatnya bisa begini
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],  // atau begini
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        dd('registerasi berhasil');
    }
}
