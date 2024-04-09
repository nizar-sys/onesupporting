<x-app-layout title="Data Pendukung" header="Tambah Data Pendukung">
    <div class="row">
        <div class="col">
            <div class="form-group text-right mb-0">

                <a href="{{ route('voter.index') }}" class="btn btn-danger waves-effect waves-light mb-3">
                    <i class="fas fa-fw fa-undo-alt"></i> back
                </a>
            </div>
        </div>
    </div>
    <x-_alert />
    <div class="row">
        <div class="col-md-4">
            <div class="card-box">
                <h4 class="header-title mb-4">Tambah One Supporting</h4>
                <form action="{{ route('voter.store', $voter) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('pages.voters.form', ['voter' => $voter])
                    <button type="submit" class="btn btn-blue">Save</button>
                </form>
            </div>
        </div>
        <div class="col-md-8">

        </div>
    </div>
</x-app-layout>
