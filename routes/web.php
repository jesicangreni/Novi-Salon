<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('homepage');
});
Route::get('/review', function () {
    return view('/review');
});


