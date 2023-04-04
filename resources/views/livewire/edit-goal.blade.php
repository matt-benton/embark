<div>
    <h2>Edit Goal</h2>
    <form wire:submit.prevent="update">
        <label for="name">Name</label>
        <input type="text" wire:model="goal.name" id="name" autofocus />
        @error('goal.name') <span class="error">{{ $message }}</span> @enderror

        <label for="description">Description</label>
        <textarea wire:model="goal.description" id="description"></textarea>
        @error('goal.description') <span class="error">{{ $message }}</span> @enderror
        <button>Save</button>
    </form>

    <button wire:click.prevent="delete">Delete</button>
</div>
