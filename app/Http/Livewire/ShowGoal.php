<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Goal;

class ShowGoal extends Component
{
    public Goal $goal;

    public function render()
    {
        return view('livewire.show-goal');
    }

    public function mount(Goal $goal)
    {
        $this->goal = $goal;
    }
}
