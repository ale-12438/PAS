<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();   
        return view('users.index', compact('users'));



    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function showbook(Book $book)
{
    return view('users.show', compact('book'));
}
}
