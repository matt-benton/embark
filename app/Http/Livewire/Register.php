<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $email;
    public $password;

    protected function rules()
    { 
        return [
            'email' => 'required|email|unique:users,email',
            'password' => ['required', Password::min(8)->mixedCase()->numbers()],
        ];
    }

    public function render()
    {
        return view('livewire.register')
            ->layoutData(['title' => 'Register']);
    }

    public function submit()
    {
        $this->validate();

        $user = new User;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
