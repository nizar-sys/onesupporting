<x-app-layout title="Role Managament" header="Role & Permissions">
    <div class="row">
        <div class="col">
            <div class="form-group text-right mb-0">

                <a href="{{ route('role.index') }}" class="btn btn-danger waves-effect waves-light mb-3">
                    <i class="fas fa-fw fa-undo-alt"></i> back
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('role.update', $role) }}" method="post">
                <div class="card-box">
                    <h4 class="header-title mb-4">Role Name</h4>
                    @csrf
                    @method('put')
                    @include('pages.roles.form', ['show' => true])

                </div>
        </div>
        <div class="col-md-8">
            <x-_permissions :permissions="$permissions" :role="$role" :show="true" />
            </form>
        </div>
    </div>
</x-app-layout>
