<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\PortfolioController;


use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/explore', [PageController::class, 'explore']);
Route::post('/apply', [ApplicationController::class, 'createApplication'])->middleware('auth');
Route::get('/post', [PageController::class, 'post']);
Route::post('/post', [ServiceController::class, 'createService'])->middleware('auth');
Route::get('/login', [PageController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'login'])->middleware('guest');
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/register', [PageController::class, 'register'])->middleware('guest');
Route::post('/register', [UserController::class, 'createUser'])->middleware('guest');
Route::get('/portfolio', [PageController::class, 'portfolio'])->middleware('auth');
Route::get('/services', [PageController::class, 'service']);
Route::get('/profile', [PageController::class, 'profile'])->middleware('auth');

Route::prefix('seller')->name('seller.')->group( function() {
    Route::get('/', [SellerController::class, 'index'])->name("index");
    Route::get('/home', [SellerController::class, 'home'])->name("home");
    Route::get('/profile', [SellerController::class, 'profile'])->name('profile');
    
    Route::prefix("portfolio")->name('portfolio.')->group( function() {
        Route::get('/', [PortfolioController::class, 'index'])->name('index');

    });
    
});