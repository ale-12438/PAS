<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create() {
        return view('create.index');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|numeric',
            'publisher' => 'required',
            'gambar' => 'required',
            'description' => 'required|max:1500',

        ]);


        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan');
    }

    public function edit(Book $book) {
        return view('edit.index', compact('book'));
    }

    public function update(Request $request, Book $book) {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|numeric',
            'publisher' => 'required',
        ]);

        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui');
    }

    public function destroy(Book $book) {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus');
    }
}

