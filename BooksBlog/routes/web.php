<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('books');
// });

Route::get('upload_book', [BookController::class,'create'])->name('upload_book');

Route::post('store', [BookController::class,'store'])->name('store_book');

Route::get('books', [BookController::class,'index'])->name('books');
Route::get('/', [BookController::class,'home']);
Route::get('books/book-profile/{id}', [BookController::class,'book_profile'])->name('book-card');

Route::get('login',[UserController::class,'LoginForm'])->name('login-form');
Route::post('login-post',[UserController::class,'postLogin'])->name('login');

Route::get('register',[UserController::class,'RegisterForm'])->name('register-form');
Route::post('register-post',[UserController::class,'postRegistration'])->name('register');

Route::get('dashboard',[UserController::class,'dashboard'])->name('dashboard');
Route::get('logout',[UserController::class,'logout'])->name('logout');


Route::get('send_message',[MessageController::class,'create'])->name('send_message');
Route::post('contact',[MessageController::class,'store'])->name('contact');
