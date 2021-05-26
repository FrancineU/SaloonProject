<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\EmployeeController;
use \App\Http\Controllers\AppointmentController;
use \App\Http\Controllers\SaloonController;

Route::get('/home', [HomeController::class, 'home']);

Route::get('/saloons', [SaloonController::class, 'allSaloons']);
Route::get('/saloons/add', [SaloonController::class, 'addNew']);
Route::post('/saloons', [SaloonController::class, 'saveNew']);
Route::get('/saloons/{id}/update', [SaloonController::class, 'update']);
Route::post('/saloons/{id}/update', [SaloonController::class, 'saveUpdate']);
Route::get('/saloons/{id}/delete', [SaloonController::class, 'delete']);

Route::get('/employees', [EmployeeController::class, 'allEmployees']);
Route::get('/employees/add', [EmployeeController::class, 'addNewEmployee']);

Route::get('/appointments', [AppointmentController::class, 'allAppointments']);
