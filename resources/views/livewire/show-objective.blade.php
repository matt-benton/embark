<div>
    <h2>{{ $objective->name }}</h2>
    <ul class="objectives-list">
        @foreach ($objective->subtasks as $subtask)
            <li>
                {{ $subtask->name }}
                <div class="objective-actions">
                    <button wire:click.prevent="completeSubtask({{ $subtask }})" class="icon-btn btn-transparent">
                        <livewire:icons.check-icon>
                    </button>
                    <button wire:click.prevent="deleteSubtask({{ $subtask }})" class="icon-btn btn-transparent">
                        <livewire:icons.trash-icon>
                    </button>
                </div>
            </li>
        @endforeach
    </ul>
    <livewire:subtask-form :objective="$objective" />
    <h3>Completed</h3>
    <ul class="objectives-list">
        @foreach ($completedSubtasks as $completed)
            <li>
                {{ $completed->name }}
                <div class="objective-actions">
                    <button wire:click.prevent="uncompleteSubtask({{ $completed }})" class="icon-btn btn-transparent">
                        <livewire:icons.x-circle-icon>
                    </button>
                </div>
            </li>
        @endforeach
    </ul>
</div>
