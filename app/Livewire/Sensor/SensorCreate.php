<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{

    public $ambiente;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    protected $rules = [
        'ambiente' => 'required|integer',
        'codigo' => 'required|string|unique:sensors,codigo',
        'tipo' =>   'required|string',
        'descricao' => 'required',
        'status' => 'boolean'
    ]; 

    protected $messages = [
        'ambiente.required' => 'Este campo é obrigatório.',
        'ambiente.integer' => 'O campo ID é do tipo inteiro.',
        'codigo.required' => 'Este campo é obrigatório.',
        'codigo.string' => 'O campo codigo deve ser um texto válido.',
        'codigo.unique' => 'Codigo já cadastrado.',
        'tipo.required' => 'Este campo é obrigatório.',
        'tipo.string' => 'O campo tipo deve ser um texto valido.',
        'descricao.required' => 'Este campo é obrigatório.',
        'status.boolean' => 'Apenas os valores true ou false'
    ];

    public function store() {
       $this->validate();

        if ($this->ambiente == null) {
          
            session()->flash('error', 'Não foi possivel achar o ambiente');
        }   
        

            Sensor::create([
                'ambiente_id' => $this->ambiente,
                'codigo' => $this->codigo,
                'tipo' => $this->tipo,
                'descricao' => $this->descricao,
                'status' => $this->status
            ]);

            session()->flash('message', 'Sensor criado com sucesso');
        }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensor.sensor-create', compact('ambientes'));
    }
}
