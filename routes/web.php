<?php

use App\Livewire\Dashboard;
use App\Livewire\Sensor\SensorCreate;
use App\Models\Sensor;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);
Route::get('sensor/create', SensorCreate::class)->name('sensor.create');