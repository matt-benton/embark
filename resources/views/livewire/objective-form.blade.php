<div>
    <form wire:submit.prevent="save({{ $goal }})">
        <div class="form-group">
            <label for="name">New Objective</label>
            <textarea id="name" wire:model="objective.name"></textarea>
            @error('objective.name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button>Save</button>
    </form>
</div>
