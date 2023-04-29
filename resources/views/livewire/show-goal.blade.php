<div>
    <h2>{{ $goal->name }}</h2>
    <p>{{ $goal->description }}</p>
    <a href="{{ route('goals.edit', ['goal' => $goal]) }}">Edit</a>
    <div class="row">
        <h3>Objectives</h3>
        <ul class="objectives-list">
            @foreach ($goal->objectives as $objective)
                <li><livewire:objective-card :objective="$objective" /></li>
            @endforeach
        </ul>
        @livewire('objective-form', ['goal' => $goal])
    </div>

    <h3>Completed</h3>
    <ul class="objectives-list">
        @foreach ($completedObjectives as $completed)
            <li>{{ $completed->name }} {{ $completed->completed_at }}</li>
        @endforeach
    </ul>
</div>
