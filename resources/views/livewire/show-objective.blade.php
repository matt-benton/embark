<div>
    <h2>{{ $objective->name }}</h2>
    <ul>
        @foreach ($objective->subtasks as $subtask)
            <li>{{ $subtask->name }}</li>
        @endforeach
    </ul>
    <livewire:subtask-form :objective="$objective" />
</div>
