<div>
    <h2>{{ $goal->name }}</h2>
    <p>{{ $goal->description }}</p>
    <a href="{{ route('goals.edit', ['goal' => $goal]) }}">Edit</a>
</div>
