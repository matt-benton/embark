<div>
    <h2>{{ $objective->name }}</h2>
    <ul>
        @foreach ($objective->subtasks as $subtask)
            <li>
                {{ $subtask->name }}
                <button wire:click.prevent="completeSubtask({{ $subtask }})">
                    Complete
                </button>
            </li>
        @endforeach
    </ul>
    <livewire:subtask-form :objective="$objective" />
    <h3>Completed</h3>
    <ul>
        @foreach ($completedSubtasks as $completed)
            <li>{{ $completed->name }} {{ $completed->completed_at }}</li>
        @endforeach
    </ul>
</div>
