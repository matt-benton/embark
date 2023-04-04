<div>
    <ul>
        @foreach ($goals as $goal)
            <li>
                <h3>{{ $goal->name }}</h3>
                <p>{{ $goal->description }}</p>
            </li>
        @endforeach
    </ul>
</div>
