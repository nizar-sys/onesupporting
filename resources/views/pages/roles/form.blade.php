<div class="form-group">
    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" autofocus
        value="{{ old('name') ?? $role->name }}" placeholder="Role name"
        @if ($show) disabled @endif />
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
