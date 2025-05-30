<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\registerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/  

Route::get('/', function () {
    return view('welcome'); 

    
});
Route::resource('books', BookController::class);

Route::get('/', function () {
    return view('welcome');
});

route::middleware('guest')->group(function () {
 
Route::get('/login', [authController::class, 'index'])->name('auth.login');
Route::post('/login', [authController::class, 'store'])->name('auth.login.store');


Route::get('/register', [registerController::class, 'index'])->name('register.index');
Route::post('/register', [registerController::class, 'store'])->name('register.store');

});


Route::middleware('auth')->group(function(){
    // Route::get('dashboard', function(){
    //     $user = auth()->user();
    //     return view('dashboard', compact('user'));
    // })->name('dashboard')->middleware('auth');
    
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/create', [BookController::class, 'store'])->name('books.store');
    Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');

    Route::post('logout', [authController::class,
    'logout'])->name('logout');

});