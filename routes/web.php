<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/article', [ArticleController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
