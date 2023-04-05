<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subtask;
use App\Models\Objective;

class SubtaskForm extends Component
{
    public Subtask $subtask;
    public Objective $objective;

    protected $rules = [
        'subtask.name' => 'required',
    ];

    public function render()
    {
        return view('livewire.subtask-form');
    }

    public function mount()
    {
        $this->subtask = new Subtask;
    }

    public function save(Objective $objective)
    {
        $this->validate();

        $objective->subtasks()->save($this->subtask);

        return redirect()->route('objectives.show', ['objective' => $objective]);
    }
}
