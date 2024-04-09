<x-app-layout title="Data Kecamatan" header="Edit Kecamatan">
    <div class="row">
        <div class="col">
            <div class="form-group text-right mb-0">

                <a href="{{ route('district.index') }}" class="btn btn-danger waves-effect waves-light mb-3">
                    <i class="fas fa-fw fa-undo-alt"></i> back
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('district.update', $district) }}" method="post">
                <div class="card-box">
                    <h4 class="header-title mb-4">Tentukan Koordinator</h4>
                    @csrf
                    @method('put')
                    @include('pages.datas.districts.form', ['show' => false])
                    <button type="submit" class="btn btn-blue">Update</button>

                </div>
        </div>
    </div>
</x-app-layout>
