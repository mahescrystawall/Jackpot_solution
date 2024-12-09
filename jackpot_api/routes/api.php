<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BetController;
use App\Http\Controllers\Api\PriceValueController;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\EventController;


// Example of a route with authentication
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route for fetching unsettled bets
Route::get('/unsettled_bets', [BetController::class, 'getUnsettledBets'])->name('unsettled_bets');

// Route for fetching stakes value
Route::get('/stakes', [PriceValueController::class, 'getStakes']);

// Route for fetching menu items
Route::get('/menu', [MenuController::class, 'getMenu']);

Route::get('/events', [EventController::class, 'getEvents']);
