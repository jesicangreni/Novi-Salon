<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Cookie;


// Rute untuk halaman home
Route::get('/', function () {
    return view('homepage');
})->name('home'); // Menambahkan nama untuk rute home

// Rute untuk login
Route::get('login', [AuthManager::class, 'login'])->name('login');
Route::post('login', [AuthManager::class, 'loginPost'])->name('login.post');

// Rute untuk register
Route::get('register', [AuthManager::class, 'register'])->name('register');
Route::post('register', [AuthManager::class, 'registerPost'])->name('register.post');

// Rute untuk logout
Route::get('logout', [AuthManager::class, 'logout'])->name('logout');

// Rute untuk review
Route::get('/review', function () {
    return view('review'); // Ganti dengan nama view yang sesuai
})->name('review');


