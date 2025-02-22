<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Display register form
    public function showRegisterForm()
    {
        return view('auth.register', ['hideNavbar' => true]);
    }
    //Register
    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|min:5|max:200',
            'email' => 'required|email|unique:users',
            'phone_number' => ['required', 'string', 'max:11'],
            'address' => ['required', 'string', 'max:255'],
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'password' =>  bcrypt($request->password)
        ]);

        Auth::login($user);

        return redirect()->route('home')->with('success', 'Account has been created successfully🎉');
    }

    //Display login form
    public function showLoginForm()
    {
        return view('auth.login', ['hideNavbar' => true]);
    }
}
