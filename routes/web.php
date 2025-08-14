<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Models\Ambiente;
use Illuminate\Support\Facades\Route;

Route::get('ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('ambiente/{id}/edit', AmbienteEdit::class)->name('ambiente.edit');
Route::get('ambiente/index', AmbienteList::class)->name('ambiente.index'); 
