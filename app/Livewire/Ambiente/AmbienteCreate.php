<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    public $status;

    public function store() {
       

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
