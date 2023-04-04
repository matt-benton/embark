<div>
     <form wire:submit.prevent="submit">
        <label for="email">Email</label>
        <input type="text" wire:model="email" id="email" autofocus>
        @error('email') <span class="error">{{ $message }}</span> @enderror

        <label for="password">Password</label>
        <input type="password" wire:model="password" id="password">
        @error('password') <span class="error">{{ $message }}</span> @enderror
        <button type="submit">Login</button>
    </form>
    <a href="{{ route('register') }}">Register</a>
</div>
