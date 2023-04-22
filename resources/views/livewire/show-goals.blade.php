<div>
    <ul id="goals-list">
        @foreach ($goals as $goal)
            <li>
                <div class="goal-card">
                    <h3>
                        <a href="{{ route('goals.show', ['goal' => $goal]) }}">{{ $goal->name }}</a>
                    </h3>
                    <p>{{ $goal->description }}</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>
