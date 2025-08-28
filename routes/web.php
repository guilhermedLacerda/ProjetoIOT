<?php

use App\Livewire\Dashboard;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorDelete;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorList;
use App\Models\Sensor;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);
Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');
Route::get('/sensor/{id}/edit', SensorEdit::class)->name('sensor.edit');
Route::get('/sensor/list', SensorList::class)->name('sensor.list');
Route::get('/sensor/{id}/delete', SensorDelete::class)->name('sensor.delete');