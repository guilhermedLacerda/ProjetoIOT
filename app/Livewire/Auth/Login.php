<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

     public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        
        'email.required' => 'email obrigatória',
        'email.email' => 'formato de email incorreta',

        'password.required' => 'senha obrigatória',
        'password.min' => 'minímo de 6 caracteres',
    ];

    public function login(){
        $this->validate();

        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            session()->regenerate();
            return redirect()->route('dashboard');
        }



        session()->flash('error', 'Email ou senha incorretos');
    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
