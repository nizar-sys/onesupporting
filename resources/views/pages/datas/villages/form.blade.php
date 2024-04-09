<div class="form-group">
    <label for="district_name">Nama Wilayah</label>
    <input type="text" id="district_name" name="district_name"
        class="form-control @error('district_name') is-invalid @enderror" autofocus
        value="{{ old('district_name') ?? $district->district_name }}" disabled placeholder="Menu district_name" />
    @error('district_name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="user_id">Koordinator Wilayah</label>
    <select class="form-control" data-toggle="select2" name="user_id" id="user_id" style="width: 100%;"
        placeholder="Pilih Korwil" @if ($show) disabled @endif>
        <option @if (old('user_id') == $district['user_id']) selected disabled @endif value="" name="user_id" id="user_id">
            Pilih Korwil</option>
        @foreach ($users as $row)
            <option @if (old('user_id') == $row['id'] || $district['user_id'] == $row['id']) selected @endif value="{{ old('user_id') ?? $row['id'] }}">
                {{ $row['name'] }}
            </option>
        @endforeach
    </select>
</div>



<x-select2 />
