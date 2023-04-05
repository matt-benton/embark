<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Objective;

class ObjectiveCard extends Component
{
    public Objective $objective;

    public function render()
    {
        return view('livewire.objective-card');
    }

    public function complete()
    {
        $this->objective->complete();

        return redirect("/goals/{$this->objective->goal_id}");
    }
}
