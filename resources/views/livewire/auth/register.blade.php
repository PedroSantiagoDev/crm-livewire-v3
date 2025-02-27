<x-card class="max-auto w-[400px]">
    <x-form wire:submit="submit">
        <x-input label="Name" wire:model="name" />
        <x-input label="Email" wire:model="email" />
        <x-input label="Confirm your email" wire:model="email_confirmation" />
        <x-input label="Password" wire:model="password" type="password" />

        <x-slot:actions>
            <x-button wire:navigate label="Login" link="{{ route('login') }}" no-wire-navigate class="btn-ghost" />
            <x-button label="Register" class="btn-primary" type="submit" spinner="submit" />
        </x-slot:actions>
    </x-form>
</x-card>
