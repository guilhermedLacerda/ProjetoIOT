<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    public $status;

      protected $rules = [
        'nome' => 'required',
        'status' => 'boolean',
    ]; 

     protected $messages = [
        'nome.required' => 'Campo Nome é Obrigatório',
        'status.boolean' => 'Determine o Status do Sensor'
    ];

    public function store() {
       $this->validate();

        Ambiente::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);

        session()->flash('message', 'Ambiente criado com sucesso');

        $this->reset(['nome', 'descricao', 'status']);
    }


    public function render()
    
    {
        return view('livewire.ambiente.ambiente-create');
    }
}
