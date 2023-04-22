<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Objective;
use App\Models\Subtask;

class ShowObjective extends Component
{
    public Objective $objective;

    public function render()
    {
        return view('livewire.show-objective');
    }

    public function mount()
    {
        $this->objective->load(['subtasks' => fn ($query) => $query->incomplete()]);
        $this->completedSubtasks = $this->objective->subtasks()->complete()->get();
    }

    public function completeSubtask(Subtask $subtask)
    {
        // need authorization
       
        $subtask->complete();

        return redirect()->route('objectives.show', ['objective' => $this->objective]);
    }

    public function deleteSubtask(Subtask $subtask)
    {
        // need authorization

        $subtask->delete();

        return redirect()->route('objectives.show', ['objective' => $this->objective]);
    }
}
