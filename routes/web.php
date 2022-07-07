<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginPost'])->name('login.post');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerPost'])->name('register.post');



Route::get('/', [BookController::class, 'index'])->name('book.index');
Route::get('/create', [BookController::class, 'create'])->name('book.create');
Route::post('/create', [BookController::class, 'store']);
Route::get('/show/{id}', [BookController::class, 'show'])->name('book.show');
Route::get('/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::post('/edit/{id}', [BookController::class, 'update']);
Route::get('/destroy/{id}', [BookController::class, 'destroy'])->name('book.destroy');
