<div class="form-group">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" autofocus
        value="{{ old('name') ?? $user->name }}" placeholder="Name" />
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="email">E-Mail</label>
    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
        value="{{ old('email') ?? $user->email }}" placeholder="E-Mail" />
    @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="role">Role</label>
    <select class="form-control"data-toggle="select2" required name="role" id="role" style="width: 100%;"
        placeholder="Select a Role">
        <option value="" selected>
            Choose a Role
        </option>
        @foreach ($roles as $row)
            <option @if (old('role') == $row['name'] || $role == $row['name']) selected @else null @endif
                value="{{ old('role') ?? $row['name'] }}">
                {{ $row['name'] }}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <div class="radio radio-info form-check-inline ml-2">
        <input type="radio" id="active" value="1" name="is_active"
            @if (old('is_active') == 1 || $user['is_active'] == 1) checked @else null @endif required />
        <label for="active"> Active </label>
    </div>
    <div class="radio form-check-inline">
        <input type="radio" id="non_active" value="2" name="is_active"
            @if (old('is_active') == 2 || $user['is_active'] == 2) checked @else null @endif required>
        <label for="non_active"> Non Active </label>
    </div>
</div>


<x-select2 />
