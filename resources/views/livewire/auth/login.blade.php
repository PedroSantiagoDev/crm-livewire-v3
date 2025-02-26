<div>
    @error('invalidCredentials')
        <span>{{ $message }}</span>
    @enderror

    @error('rateLimite')
        <span>{{ $message }}</span>
    @enderror
</div>
