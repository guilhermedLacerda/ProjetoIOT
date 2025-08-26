<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{

    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    protected $rules = [
        'ambiente_id' => 'required|integer',
        'codigo' => 'required|string|unique:sensors,codigo',
        'tipo' =>   'required|string',
        'descricao' => 'required|text',
        'status' => 'boolean'
    ]; 

    protected $messages = [
        'ambiente_id.required' => 'Este campo é obrigatório.',
        'ambiente_id.integer' => 'O campo ID é do tipo inteiro.',
        'codigo.required' => 'Este campo é obrigatório.',
        'codigo.string' => 'O campo codigo deve ser um texto válido.',
        'codigo.unique' => 'Codigo já cadastrado.',
        'tipo.required' => 'Este campo é obrigatório.',
        'tipo.string' => 'O campo tipo deve ser um texto valido.',
        'descricao.required' => 'Este campo é obrigatório.',
        'descricao.text' => 'O campo permite apenas texto alfanumérico',
        'status.boolean' => 'Apenas os valores true ou false'
    ];


     public function mount($id){
        $sensor = Sensor::find($id);
        if($sensor == null) {
            session()->flash('error', 'ID nao encontrado.');
        } else {
            $this->tipo = $sensor->tipo;
            $this->codigo = $sensor->codigo;
            $this->descricao = $sensor->descricao;
            $this->status = $sensor->status;
        }
    }

     public function update()
    {
        $this->validate();

        $sensor = Sensor::find($this->sensorId);
        

        $sensor->update([
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status,
        ]);

        session()->flash('message', 'Sensor atualizado com sucesso');
        return redirect()->route('Sensor.list');
    }

    public function render()
    {
        return view('livewire.sensor.sensor-edit');
    }
}
