<x-card title="Login" class="max-auto w-[400px]">
    @if ($errors->hasAny(['invalidCredentials', 'rateLimiter']))
        <x-alert icon="o-exclamation-triangle" class="alert-warning mb-2">
            @error('invalidCredentials')
                <span>{{ $message }}</span>
            @enderror
            @error('rateLimiter')
                <span>{{ $message }}</span>
            @enderror
        </x-alert>
    @endif
    <x-form wire:submit="tryToLogin">
        <x-input label="Email" wire:model="email" />
        <x-input label="Password" wire:model="password" type="password" />

        <x-slot:actions>
            <x-button wire:navigate label="Register" link="{{ route('auth.register') }}" no-wire-navigate
                class="btn-ghost" />
            <x-button label="Login" class="btn-primary" type="submit" spinner="submit" />
        </x-slot:actions>
    </x-form>
</x-card>
