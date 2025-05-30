<?php

use App\Http\Controllers\Backend\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/backend/login', function () {
    return view('login');
});
Route::get('/backend/forgot-password', function () {
    return view('forgot_password');
});
Route::get('/backend/dashboard', function () {
    return view('backend.dashboard.create');
});
Route::get('/backend/categories/create', function () {
    return view('backend.categories.create');
});
Route::get('/backend/category', function () {
    return view('backend.category.index');
});

// Show login form
Route::get('/login', [AuthController::class, 'showLogin'])->name('backend.showlogin');

// Handle login form submission
Route::post('/login', [AuthController::class, 'login'])->name('backend.login');

// Show register form
Route::get('/register', [AuthController::class, 'showRegister'])->name('backend.showregister');

// Handle register form submission
Route::post('/register', [AuthController::class, 'register'])->name('backend.register');
