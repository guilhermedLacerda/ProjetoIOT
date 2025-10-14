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
    public $perPage = 15;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 15]
    ];
    
       public function BotaoLed(int $sensorId)
    {
        $sensor = Sensor::findOrFail($sensorId);
        $alterarStatus = $sensor->status == 1 ? 0 : 1;

        $sensor->status = $alterarStatus;
        $sensor->save();

        session()->flash('message', 'Status do Sensor ' . $sensor->codigo . ' atualizado para: ' . ($alterarStatus == 1 ? 'Ligado' : 'Desligado'));
    }



    public function render()
    {
        $sensors = Sensor::where('tipo', 'like', "{$this->search}%")
        ->orWhere('descricao', 'like', "{$this->search}%")
        ->orWhere('codigo', 'like', "{$this->search}%")
        ->orWhere('status', 'like', "{$this->search}%")
        ->paginate($this->perPage);

        return view('livewire.sensor.sensor-list', compact('sensors'));

    }    
}   

