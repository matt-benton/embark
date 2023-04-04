<div>
    <form wire:submit.prevent="submit">
        <label for="name">Name</label>
        <input type="text" wire:model="goal.name" id="name" autofocus />
        @error('name') <span class="error">{{ $message }}</span> @enderror

        <label for="description">Description</label>
        <textarea wire:model="goal.description" id="description"></textarea>
        <button>Save</button>
    </form>
</div>
