<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\userControler;

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



Route::get('/', [BookController::class, 'index'])->name('books');
Route::get('/books/create', [BookController::class, 'create'])->name('create')->middleware('auth');
Route::post('/books', [BookController::class, 'store'])->name('store')->middleware('auth');
Route::get('/books/{book}/edit',[BookController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/books/{book}', [BookController::class, 'update'])->name('update')->middleware('auth');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('destroy')->middleware('auth');
Route::get('/book/myStore', [BookController::class, 'myStore'])->name('myStore')->middleware('auth');
Route::get('/books/{book}', [BookController::class, 'show'])->name('book');
Route::get('/register', [userControler::class, 'create'])->name('register')->middleware('guest');
Route::post('/user',[userControler::class, 'store'])->name('storeUser');
Route::post('/logout', [UserControler::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/login', [UserControler::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserControler::class, 'authenticate'])->name('authenticate');
