<div>
    <a href="{{ route('objectives.show', ['objective' => $objective]) }}">
        {{ $objective->name }}
    </a>

    <ul>
        @foreach ($objective->subtasks as $subtask)
            <li>{{ $subtask->name }}</li>
        @endforeach
    </ul>

    <button type="button" wire:click.prevent="complete">Complete</button>
</div>
