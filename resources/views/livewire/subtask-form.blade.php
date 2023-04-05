<div>
    <form wire:submit.prevent="save({{ $objective }})">
        <label for="name">New Subtask</label>
        <input type="text" id="name" wire:model="subtask.name" />
        @error('subtask.name') <span class="error">{{ $message }}</span> @enderror
        <button>Save</button>
    </form>
</div>
