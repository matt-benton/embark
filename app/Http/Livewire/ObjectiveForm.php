<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Objective;
use App\Models\Goal;

class ObjectiveForm extends Component
{
    public Objective $objective;
    public Goal $goal;

    protected $rules = [
        'objective.name' => 'required',
    ];

    public function render()
    {
        return view('livewire.objective-form');
    }

    public function mount()
    {
        $this->objective = new Objective;
    }

    public function save(Goal $goal)
    {
        $this->validate();

        $goal->objectives()->save($this->objective);

        return redirect()->route('goals.show', ['goal' => $goal]);
    }
}
