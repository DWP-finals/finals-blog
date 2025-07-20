<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/article', [ArticleController::class, 'index']);

<<<<<<< HEAD
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
=======
Route::get('/newdashboard', [DashboardController::class, 'index']);
>>>>>>> b1c4bd6e9b72fe7270f60e38bae5ef6d9d1b71ab

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
