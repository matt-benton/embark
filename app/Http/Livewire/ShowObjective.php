<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Objective;

class ShowObjective extends Component
{
    public Objective $objective;

    public function render()
    {
        return view('livewire.show-objective');
    }
}
