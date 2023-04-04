<div>
    dashboard
    <a href="{{ route('goals.create') }}">New Goal</a>
    <a href="{{ route('logout') }}">Logout</a>
    <livewire:show-goals :goals="$goals" />
</div>
