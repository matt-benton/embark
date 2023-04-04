<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Goal;
use Illuminate\Support\Facades\Auth;

class CreateGoal extends Component
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
        return view('livewire.create-goal');
    }

    public function mount()
    {
        $this->goal = new Goal;
    }

    public function submit()
    {
        $this->validate();

        Auth::user()->goals()->save($this->goal);

        return redirect()->route('dashboard');
    }
}
