<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowGoals extends Component
{
    public $goals;

    public function render()
    {
        return view('livewire.show-goals');
    }
}
