<div class="form-group">
    <label for="parent_id">Main Menu</label>
    <select class="form-control" data-toggle="select2" name="parent_id" id="parent_id" style="width: 100%;"
        placeholder="Select a Main Menu">
        <option @if (old('parent_id') == $menu['parent_id']) selected @else null @endif value="" name="parent" id="parent">
            Choose a Main Menu</option>
        @foreach ($menus as $row)
            <option @if (old('parent_id') == $row['id'] || $menu['parent_id'] == $row['id']) selected @else null @endif
                value="{{ old('parent_id') ?? $row['id'] }}">
                {{ $row['name'] }}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="name">Menu Name</label>
    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
        autofocus value="{{ old('name') ?? $menu->name }}" placeholder="Menu name" />
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="url">URL</label>
    <input type="text" id="url" name="url" class="form-control @error('url') is-invalid @enderror"
        value="{{ old('url') ?? $menu->url }}" placeholder="URL" />
    @error('url')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="permission_name">Permission Name</label>
    <input type="text" id="permission_name" name="permission_name"
        class="form-control @error('permission_name') is-invalid @enderror"
        value="{{ old('permission_name') ?? $menu->permission_name }}" placeholder="Permission Name" />
    @error('permission_name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group form-prefix">
    <label for="prefix">Prefix</label>
    <input type="text" name="prefix" class="form-control @error('prefix') is-invalid @enderror"
        value="{{ old('prefix') ?? $menu->prefix }}" placeholder="Prefix URL" />
    @error('prefix')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group form-prefix">
    <label for="icon">Icon</label>
    <input type="text" id="icon" name="icon" class="form-control @error('icon') is-invalid @enderror"
        value="{{ old('icon') ?? $menu->icon }}" placeholder="Icon" />
    @error('icon')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <div class="radio radio-info form-check-inline ml-2">
        <input type="radio" id="active" value="1" name="is_active"
            @if (old('is_active') == 1 || $menu['is_active'] == 1) checked @else null @endif required />
        <label for="active"> Active </label>
    </div>
    <div class="radio form-check-inline">
        <input type="radio" id="non_active" value="2" name="is_active"
            @if (old('is_active') == 2 || $menu['is_active'] == 2) checked @else null @endif required>
        <label for="non_active"> Non Active </label>
    </div>
</div>

<x-select2 />

@push('scripts')
    <script>
        $(document).ready(function() {
            if ($('#parent_id').val() != '') {
                $('.form-prefix').hide();
                $('.form-icon').hide();
            } else {
                $('.form-prefix').show();
                $('.form-icon').show();
            }

            $('#parent_id').on('change', function() {
                var selectedValue = $(this).val();
                if (selectedValue) {
                    $('.form-prefix').hide();
                    $('.form-icon').hide();
                } else {
                    $('.form-prefix').show();
                    $('.form-icon').show();
                }
            });
        });
    </script>
@endpush
