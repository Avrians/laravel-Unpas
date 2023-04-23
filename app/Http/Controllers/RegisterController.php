<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $validatedData = $request->validate([
            'name' => 'required|max:255', // formatnya bisa begini
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],  // atau begini
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // metode ditimba
        // $validatedData['password'] = bcrypt($validatedData['password']);

        // menggunakan metode Hash
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // cara ini eror
        // $request->session()->flash('succes', 'Registration succesfull! Please login');

        // bisa pake opsi ini
        $request = session();
        $request->flash('success', 'Registration successfull! Please login');

        // atau dengan metode ini
        // return redirect('/login')->with('success', 'Registration successfull! Please login');

        return redirect('/login');
    }
}
