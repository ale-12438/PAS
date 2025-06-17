<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('books.index')->with('success', 'Login sebagai admin');
            } else {
                return redirect()->route('users.index')->with('success', 'Login sebagai user');
            }
        }

        return back()->withErrors([
            'password' => 'Email atau password salah',
        ])->withInput();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login')->with('success', 'Logout successful!');
    }

}
