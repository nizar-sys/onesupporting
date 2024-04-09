<x-app-layout title="One Managament" header="Tambah One Supporting">
    <div class="row">
        <div class="col">
            <div class="form-group text-right mb-0">

                <a href="{{ route('one.index') }}" class="btn btn-danger waves-effect waves-light mb-3">
                    <i class="fas fa-fw fa-undo-alt"></i> back
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card-box">
                <h4 class="header-title mb-4">Tambah One Supporting</h4>
                <form action="{{ route('one.store') }}" method="post">
                    @csrf
                    @include('pages.ones.form', ['one' => $one])
                    <button type="submit" class="btn btn-blue">Save</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
