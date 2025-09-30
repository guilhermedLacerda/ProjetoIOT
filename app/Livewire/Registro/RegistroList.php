<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use Livewire\Component;
use Livewire\WithPagination;

class RegistroList extends Component
{

     use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $perPage = 15;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 15]
    ];


    public function render()
    {
        $registros = Registro::where('sensor_id', 'like', "{$this->search}%")
        ->orWhere('valor', 'like', "{$this->search}%")
        ->orWhere('unidade', 'like', "{$this->search}%")
        ->orWhere('data_hora', 'like', "{$this->search}%")
        ->orderByDesc('id','data_hora', 'valor', 'unidade', 'sensor_id')
        ->paginate($this->perPage);


         return view('livewire.registro.registro-list', compact('registros'));
    }    
}
