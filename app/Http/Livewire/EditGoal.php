<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Goal;

class EditGoal extends Component
{
    public Goal $goal;

    protected function rules()
    {
        return [
            'goal.name' => 'required',
            'goal.description' => 'max:255',
        ];
    }

    public function render()
    {
        return view('livewire.edit-goal');
    }

    public function update()
    {
        $this->validate();

        $this->goal->save();

        return redirect()->route('goals.show', ['goal' => $this->goal]); 
    }

    public function delete()
    {
        $this->goal->delete();

        return redirect()->route('dashboard');
    }
}
