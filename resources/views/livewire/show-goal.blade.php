<div>
    <h2>{{ $goal->name }}</h2>
    <p>{{ $goal->description }}</p>
    <a href="{{ route('goals.edit', ['goal' => $goal]) }}">Edit</a>
    <h3>Objectives</h3>
    <ul>
        @foreach ($goal->objectives as $objective)
            <li>{{ $objective->name }}</li>
        @endforeach
    </ul>
    @livewire('objective-form', ['goal' => $goal])
</div>
