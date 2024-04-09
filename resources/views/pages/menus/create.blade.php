<x-app-layout title="Menu Managament" header="Create Menu">
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
            <div class="card-box">
                <h4 class="header-title mb-4">Create Menu</h4>
                <form action="{{ route('menu.store') }}" method="post">
                    @csrf
                    @include('pages.menus.form', ['menus' => $menus])
                    <button type="submit" class="btn btn-blue">Save</button>

                </form>
            </div>
        </div>
        <div class="col-md-8">
            <x-_list_menu :menus="$menus" />

        </div>

    </div>
</x-app-layout>
