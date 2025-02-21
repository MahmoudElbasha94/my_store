<?php

use Illuminate\Support\Facades\Route;

//home route
Route::get('/', function () {
    return view('home');
})->name('home');
