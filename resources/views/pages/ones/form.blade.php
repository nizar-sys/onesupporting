<div class="form-group">
    <label for="name">Nama</label>
    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" autofocus
        value="{{ old('name') ?? $one->name }}" required />
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="email">E-Mail</label>
    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
        autofocus value="{{ old('email') ?? $one->email }}" required />
    @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="status">Status</label>
    <select class="form-control" data-toggle="select2" name="status" id="status" style="width: 100%;"
        placeholder="Status">
        <option @if (old('status') ==
                Auth::user()->getRoleNames()->first()) selected @else null @endif value="">
            Pilih Status</option>
        @foreach ($roles as $row)
            <option @if (old('status') == $row['name'] || $status == $row['name']) selected @else null @endif
                value="{{ old('status') ?? $row['name'] }}">
                {{ $row['name'] }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <div class="radio radio-info form-check-inline ml-2">
        <input type="radio" id="laki-laki" value="1" name="gender"
            @if (old('gender') == 1 || $one['gender'] == 1) checked @else null @endif required />
        <label for="laki-laki"> Laki-Laki </label>
    </div>
    <div class="radio form-check-inline">
        <input type="radio" id="perempuan" value="2" name="gender"
            @if (old('gender') == 2 || $one['gender'] == 2) checked @else null @endif required>
        <label for="perempuan"> Perempuan </label>
    </div>
</div>

<div class="form-group">
    <label for="tps_id">Alamat</label>
    <select class="form-control" data-toggle="select2" name="tps_id" id="tps_id" style="width: 100%;"
        placeholder="Pilih Desa / Kelurahan" required>
        <option @if (old('tps_id') == $one['tps_id']) selected @else null @endif value="">
            Pilih TPS</option>
        @foreach ($tpss as $row)
            <option @if (old('tps_id') == $row['id'] || $one['tps_id'] == $row['id']) selected @else null @endif
                value="{{ old('tps_id') ?? $row['id'] }}">
                @if ($row->villages->village_type == 'Desa')
                    Desa {{ $row->villages->village_name }}
                @else
                    Kel. {{ $row->villages->village_name }}
                @endif {{ $row['tps_name'] }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <div class="radio radio-info form-check-inline ml-2">
        <input type="radio" id="active" value="1" name="is_active"
            @if (old('is_active') == 1 || $one['is_active'] == 1) checked @else null @endif required />
        <label for="active"> Active </label>
    </div>
    <div class="radio form-check-inline">
        <input type="radio" id="non_active" value="2" name="is_active"
            @if (old('is_active') == 2 || $one['is_active'] == 2) checked @else null @endif required>
        <label for="non_active"> Non Active </label>
    </div>
</div>


<x-select2 />

@push('scripts')
@endpush
