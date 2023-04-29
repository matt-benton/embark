<div class="objective-card">
    <h4>
    <a href="{{ route('objectives.show', ['objective' => $objective]) }}">
        {{ $objective->name }}
    </a>
    </h4>

    <ul class="objective-subtask-list">
        @foreach ($objective->subtasks as $subtask)
            <li>{{ $subtask->name }}</li>
        @endforeach
    </ul>

    <button type="button" wire:click.prevent="complete">Complete</button>
</div>
