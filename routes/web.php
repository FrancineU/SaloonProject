<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\EmployeeController;
use \App\Http\Controllers\AppointmentController;
use \App\Http\Controllers\SaloonController;

Route::get('/', [HomeController::class, 'home']);

Route::get('/saloons', [SaloonController::class, 'allSaloons']);
Route::get('/saloons/add', [SaloonController::class, 'addNew']);
Route::post('/saloons', [SaloonController::class, 'saveNew']);
Route::get('/saloons/{id}/update', [SaloonController::class, 'update']);
Route::post('/saloons/{id}/update', [SaloonController::class, 'saveUpdate']);
Route::get('/saloons/{id}/delete', [SaloonController::class, 'delete']);

Route::get('/employees', [EmployeeController::class, 'allEmployees']);
Route::get('/employees/add', [EmployeeController::class, 'addNew']);
Route::post('/employees', [EmployeeController::class, 'saveNew']);
Route::get('/employees/{id}/update', [EmployeeController::class, 'update']);
Route::post('/employees/{id}/update', [EmployeeController::class, 'saveUpdate']);
Route::get('/employees/{id}/delete', [EmployeeController::class, 'delete']);

Route::get('/appointments', [AppointmentController::class, 'allAppointments']);
Route::get('/appointments/add', [AppointmentController::class, 'addNew']);
Route::post('/appointments', [AppointmentController::class, 'saveNew']);
Route::get('/appointments/{id}/update', [AppointmentController::class, 'update']);
Route::post('/appointments/{id}/update', [AppointmentController::class, 'saveUpdate']);
Route::get('/appointments/{id}/delete', [AppointmentController::class, 'delete']);
