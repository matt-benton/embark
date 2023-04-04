<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    protected function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public function render()
    {
        return view('livewire.login')
            ->layoutData(['title' => 'Login']);
    }

    public function submit()
    {
        $credentials = $this->validate();

        if (Auth::attempt($credentials)) {
           session()->regenerate(); 

           return redirect()->route('dashboard');
        }
        
        $this->addError('email', 'The provided credentials do not match our records.');
    }
}
