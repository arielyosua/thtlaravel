<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::get('/signin', [AuthController::class, 'showSignIn'])->name('signin');
Route::post('/signin', [AuthController::class, 'login'])->name('login');

Route::get('/signup', [AuthController::class, 'showSignUp'])->name('signup');
Route::post('/signup', [AuthController::class, 'register'])->name('register');

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/visi', function () {
    return view('visi');
})->name('visi');

Route::get('/simbol', function () {
    return view('simbol');
})->name('simbol');