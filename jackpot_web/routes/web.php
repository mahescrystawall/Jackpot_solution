<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', [LoginController::class, 'showLoginForm']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/postlogin', [LoginController::class, 'getLoginData'])->name('postlogin');
Route::middleware(['client'])->group(function () {
    Route::resource('/home', DashboardController::class);

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});