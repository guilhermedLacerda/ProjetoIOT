<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteDelete extends Component
{

     public $ambienteId;
    public $nome;

    public function mount($id)
    {
        $ambiente = Ambiente::find($id);
        if($ambiente == null) {
            session()->flash('error', 'Id de ambiente nao encontrado');
        } else {
        $this->ambienteId = $ambiente->id;
        $this->nome = $ambiente->nome;
        }
    }
 
    public function delete()
    {
        $ambiente = Ambiente::find($this->ambienteId);
        $ambiente->delete();
 
        session()->flash('message', 'Ambiente excluído com sucesso.');{
            return redirect()->route('ambiente.list');
        }        
    }

    public function render()
    {
        return view('livewire.ambiente.ambiente-delete');
    }
}
