<div>
    <form wire:submit.prevent="save({{ $goal }})">
        <label for="name">New Objective</label>
        <input type="text" id="name" wire:model="objective.name" />
        @error('objective.name') <span class="error">{{ $message }}</span> @enderror
        <button>Save</button>
    </form>
</div>
