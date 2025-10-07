<?php


use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteDelete;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Models\Ambiente;
use Illuminate\Support\Facades\Route;

Route::get('ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('ambiente/{id}/edit', AmbienteEdit::class)->name('ambiente.edit');
Route::get('ambiente/list', AmbienteList::class)->name('ambiente.list'); 
Route::get('ambiente/{id}/delete', AmbienteDelete::class)->name('ambiente.delete'); 

use App\Livewire\Dashboard;
Route::get('/', Dashboard::class);
