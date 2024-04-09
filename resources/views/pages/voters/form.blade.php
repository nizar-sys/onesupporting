<div class="form-group">
    <label for="voter_name">Nama</label>
    <input type="text" id="voter_name" name="voter_name" class="form-control @error('voter_name') is-invalid @enderror"
        autofocus value="{{ old('voter_name') ?? $voter->voter_name }}" required />
    @error('voter_name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label for="tps_id">Alamat</label>
    <select class="form-control" data-toggle="select2" name="tps_id" id="tps_id" style="width: 100%;"
        placeholder="Pilih Desa / Kelurahan" required>
        <option @if (old('tps_id') == $voter['tps_id']) selected @else null @endif value="">
            Pilih TPS</option>
        @foreach ($tpss as $row)
            <option @if (old('tps_id') == $row['id'] || $voter['tps_id'] == $row['id']) selected @else null @endif
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
    <p>Tambah Foto</p>
    <input type="file" class="filestyle @error('voter_image') is-invalid @enderror" id="voter_image"
        name="voter_image" onchange="previewFile()" />
    @error('voter_image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <img src="#" alt="preview" id="preview" height="125px">
</div>
<div class="form-group">
    <div class="radio radio-info form-check-inline ml-2">
        <input type="radio" id="laki-laki" value="1" name="gender"
            @if (old('gender') == 1 || $voter['gender'] == 1) checked @else null @endif required />
        <label for="laki-laki"> Laki-Laki </label>
    </div>
    <div class="radio form-check-inline">
        <input type="radio" id="perempuan" value="2" name="gender"
            @if (old('gender') == 2 || $voter['gender'] == 2) checked @else null @endif required>
        <label for="perempuan"> Perempuan </label>
    </div>
</div>



<div class="form-group row">
    <label class="col-md-4 col-form-label" for="example-number">Potensi Suara</label>
    <div class="col-md-8">
        <input class="form-control" id="voter_potential" type="number" name="voter_potential">
    </div>
</div>




<x-select2 />
<x-filestyle />
@push('scripts')
    <script>
        function previewFile() {
            var preview = document.querySelector('#preview');
            var voter_image = document.querySelector('input[type=file]').files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
            }

            if (voter_image) {
                reader.readAsDataURL(voter_image);
            } else {
                preview.src = "";
            }
        }
    </script>
@endpush
