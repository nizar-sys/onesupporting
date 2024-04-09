<x-app-layout title="One Managament" header="Data One Supoting">
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
            <form action="{{ route('one.update', $one) }}" method="post">
                <div class="card-box">
                    <h4 class="header-title mb-4">Data One Supoting</h4>
                    @csrf
                    @method('put')
                    @include('pages.ones.form')
                </div>
        </div>
    </div>
</x-app-layout>
