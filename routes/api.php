<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SensorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('registro/create', [RegistroController::class, 'store']);


Route::get('sensor/find/status', [SensorController::class, 'findStatus']);

Route::put('sensor/update', [SensorController::class, 'update']);
