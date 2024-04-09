<x-app-layout title="Menu Managament" header="Menu Management">
    <div class="row">
        <div class="col">
            <div class="form-group text-right mb-0">

                <a href="{{ route('menu.index') }}" class="btn btn-danger waves-effect waves-light mb-3">
                    <i class="fas fa-fw fa-undo-alt"></i> back
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('menu.update', $menu) }}" method="post">
                <div class="card-box">
                    <h4 class="header-title mb-4">Menu Name</h4>
                    @csrf
                    @method('put')
                    @include('pages.menus.form')

                </div>
        </div>
        <div class="col-md-8">
            <x-_list_menu :menus="$menus" />

        </div>
    </div>
</x-app-layout>
