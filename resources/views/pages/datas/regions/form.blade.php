<div class="form-group">
    <label for="region_name">Nama Wilayah</label>
    <input type="text" id="region_name" name="region_name"
        class="form-control @error('region_name') is-invalid @enderror" autofocus
        value="{{ old('region_name') ?? $region->region_name }}" @isset($show) disabled @endisset
        placeholder="Menu region_name" />
    @error('region_name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="user_id">Koordinator Wilayah</label>
    <select class="form-control" data-toggle="select2" name="user_id" id="user_id" style="width: 100%;"
        placeholder="Pilih Korwil" @isset($show) disabled @endisset>
        <option @if (old('user_id') == $region['user_id']) selected disabled @endif value="" name="user_id" id="user_id">
            Pilih Korwil</option>
        @foreach ($users as $row)
            <option @if (old('user_id') == $row['id'] || $region['user_id'] == $row['id']) selected @endif value="{{ old('user_id') ?? $row['id'] }}">
                {{ $row['name'] }}
            </option>
        @endforeach
    </select>
</div>



<x-select2 />
