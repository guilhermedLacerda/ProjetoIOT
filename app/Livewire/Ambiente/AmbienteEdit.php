<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public $nome;
    public $descricao;
    public $status;
    public $ambiente;
    public $ambienteId;

    public function rules()
    {
        return [
            'nome' => 'required',
            'status' => 'boolean'
        ];
    }

    protected $messages = [
        'nome.required' => 'Campo Nome é Obrigatório',
        'status.boolean' => 'Determine o Status do Sensor'
    ];

    public function mount($id)
    {
        $ambiente = Ambiente::find($id);
        if ($ambiente == null) {
            session()->flash('error', 'ID de ambiente nao encontrado');
        } else {
            $this->ambienteId = $ambiente->id;
            $this->nome = $ambiente->nome;
            $this->descricao = $ambiente->descricao;
            $this->status = $ambiente->status;
        }
    }

    public function update()
    {
        $this->validate();

        $ambiente = Ambiente::find($this->ambienteId);

        $ambiente->update([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);

        session()->flash('message', 'Ambiente atualizado com sucesso');
        return redirect()->route('ambiente.list');
    }



    public function render()
    {
        return view('livewire.ambiente.ambiente-edit');
    }
}
