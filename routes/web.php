<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SaloonController;
use \App\Http\Controllers\HairstyleController;
use \App\Http\Controllers\HairtypeController;
Route::get('/saloon', [SaloonController::class, 'home']);
Route::post('/saloon', [SaloonController::class, 'save']);
Route::get('/saloon/{id}/update', [SaloonController::class, 'update']);
Route::post('/saloon/{id}/update', [SaloonController::class, 'saveUpdate']);
Route::get('/saloon/{id}/delete', [SaloonController::class, 'delete']);

Route::get('/hairstyle', [HairstyleController::class, 'home']);
Route::post('/hairstyle', [HairstyleController::class, 'save']);
Route::get('/hairstyle/{id}/update', [HairstyleController::class, 'update']);
Route::post('/hairstyle/{id}/update', [HairstyleController::class, 'saveUpdate']);
Route::get('/hairstyle/{id}/delete', [HairstyleController::class, 'delete']);
<<<<<<< HEAD

Route::get('/hairtype', [HairtypeController::class,'home']);
Route::post('/hairtype', [HairtypeController::class,'save']);
Route::get('/hairtype/{id}/delete', [HairtypeController::class,'delete']);
Route::get('/hairtype/{id}/update',[HairtypeController::class,'update']);
ROute::post('/hairtype/{id}/update',[HairtypeController::class,'saveUpdate']);
=======
>>>>>>> 11df908a19a1eba294aa9d3751849e6039d87c93
