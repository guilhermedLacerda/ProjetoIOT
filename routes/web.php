<?php

use App\Livewire\Dashboard;
use App\Livewire\Registro\RegistroList;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);
Route::get('/registro/list', RegistroList::class)->name('registro.list');