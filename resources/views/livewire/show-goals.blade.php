<div>
    <ul>
        @foreach ($goals as $goal)
            <li>
                <h3>
                    <a href="{{ route('goals.show', ['goal' => $goal]) }}">{{ $goal->name }}</a>
                </h3>
                <p>{{ $goal->description }}</p>
            </li>
        @endforeach
    </ul>
</div>
