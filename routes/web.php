<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;



Route::get('/', function () {
    return view('index');
});

