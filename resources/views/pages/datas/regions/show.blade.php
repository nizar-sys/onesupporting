<x-app-layout title="Data Wilayah" header="Data Wilayah">
    <div class="row">
        <div class="col">
            <div class="form-group text-right mb-0">

                <a href="{{ route('region.index') }}" class="btn btn-danger waves-effect waves-light mb-3">
                    <i class="fas fa-fw fa-undo-alt"></i> back
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('region.update', $region) }}" method="post">
                <div class="card-box">
                    <h4 class="header-title mb-4">Data Wilayah</h4>
                    @csrf
                    @method('put')
                    @include('pages.datas.regions.form', ['show' => false])

                </div>
        </div>

    </div>
</x-app-layout>
