<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{

    public $ambiente;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;
    public $sensorId;

    public function rules()
    {
        return [
            'ambiente' => 'required|integer',
            'codigo' => 'required|string|unique:sensors,codigo,' . $this->sensorId,
            'tipo' =>   'required|string',
            'status' => 'boolean'
        ];
    }

    protected $messages = [
        'ambiente.required' => 'Este campo é obrigatório.',
        'ambiente.integer' => 'O campo ID é do tipo inteiro.',
        'codigo.required' => 'Este campo é obrigatório.',
        'codigo.string' => 'O campo codigo deve ser um texto válido.',
        'codigo.unique' => 'Codigo já cadastrado.',
        'tipo.required' => 'Este campo é obrigatório.',
        'tipo.string' => 'O campo tipo deve ser um texto valido.',
        'status.boolean' => 'Apenas os valores true ou false'
    ];


    public function mount($id)
    {
        $sensor = Sensor::find($id);
        if ($sensor == null) {
            session()->flash('error', 'ID nao encontrado.');
        } else {

            $this->sensorId = $sensor->id;
            $this->tipo = $sensor->tipo;
            $this->codigo = $sensor->codigo;
            $this->descricao = $sensor->descricao;
            $this->status = $sensor->status;
            $this->ambiente = $sensor->ambiente_id;
        }
    }

    public function update()
    {
        $this->validate();

        $sensor = Sensor::find($this->sensorId);


        $sensor->update([
            'ambiente_id' => $this->ambiente,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status,
        ]);

        session()->flash('message', 'Sensor atualizado com sucesso');
        return redirect()->route('sensor.list');
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensor.sensor-edit', compact('ambientes'));
    }
}
