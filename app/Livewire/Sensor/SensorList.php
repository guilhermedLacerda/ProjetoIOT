<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class SensorList extends Component
{

     use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10]
    ];


    public function render()
    {
        $sensor = Sensor::where('tipo', 'like', "{$this->search}%")
        ->orWhere('descricao', 'like', "{$this->search}%")
        ->orWhere('codigo', 'like', "{$this->search}%")
        ->orWhere('status', 'like', "{$this->search}%")
        ->paginate($this->perPage);

        return view('livewire.sensor.sensor-list');

    }    
}   

