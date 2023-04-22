<div class="add-goal-form">
    <form wire:submit.prevent="submit">
        <h3>Add a Goal</h3>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" wire:model="goal.name" id="name" autofocus />
            @error('goal.name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea wire:model="goal.description" id="description"></textarea>
            @error('goal.description') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button>Save</button>
    </form>
</div>
