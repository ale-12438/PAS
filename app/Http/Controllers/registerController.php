<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class registerController extends Controller
{
    public function index()
    {
        return view('register.register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
    ]);

     $user = User::create($data);
        auth()->login($user);
        return redirect()->route('books.index')->with('success', 'Registration successful');
    }
}
