<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SaloonController;
use \App\Http\Controllers\HairstyleController;

Route::get('/saloon', [SaloonController::class, 'home']);
Route::post('/saloon', [SaloonController::class, 'save']);
Route::get('/saloon/{id}/update', [SaloonController::class, 'update']);
Route::post('/saloon/{id}/update', [SaloonController::class, 'saveUpdate']);
Route::get('/saloon/{id}/delete', [SaloonController::class, 'delete']);

Route::get('/hairstyle', [HairstyleController::class, 'home']);