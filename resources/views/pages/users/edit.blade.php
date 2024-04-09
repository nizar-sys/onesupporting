<x-app-layout title="Role Managament" header="Edit Role & Assign Permissions">
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
                    <h4 class="header-title mb-4">Edit Role</h4>
                    @csrf
                    @method('put')
                    @include('pages.roles.form', ['show' => false])
                    <button type="submit" class="btn btn-blue">Update</button>

                </div>
        </div>
        <div class="col-md-8">
            <x-_permissions :permissions="$permissions" :role="$role" :show="false" />
            </form>
        </div>
    </div>
</x-app-layout>
