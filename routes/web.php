<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//home route
Route::get('/', [HomeController::class, 'index'])->name('home');

//Register routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('auth.register.form');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');

//Login routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login.form');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

//Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

//product routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');


//category routes
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
