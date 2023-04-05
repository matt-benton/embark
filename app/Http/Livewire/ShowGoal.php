<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Goal;

class ShowGoal extends Component
{
    public Goal $goal;
    public $completedObjectives;

    public function render()
    {
        return view('livewire.show-goal');
    }

    public function mount()
    {
        $this->goal->load(['objectives' => fn($query) => $query->incomplete()->get()]);
        $this->completedObjectives = $this->goal->objectives()->complete()->get(); 
    } 
}
