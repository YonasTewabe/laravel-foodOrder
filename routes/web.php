<?php

use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foods', [FoodController::class, 'index']);
Route::get('/foods/create', [FoodController::class, 'create']);
Route::get('/foods/{id}', [FoodController::class, 'show'] );


