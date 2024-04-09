<x-app-layout title="User Managament" header="Create User & Assign Permissions">
    <div class="row">
        <div class="col">
            <div class="form-group text-right mb-0">

                <a href="{{ route('user.index') }}" class="btn btn-danger waves-effect waves-light mb-3">
                    <i class="fas fa-fw fa-undo-alt"></i> back
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card-box">
                <h4 class="header-title mb-4">Create User</h4>
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    @include('pages.users.form', ['show' => false, 'role' => $role, 'roles' => $roles])
                    <button type="submit" class="btn btn-blue">Save</button>

                </form>
            </div>
        </div>
        <div class="col-md-8">
            <x-_permissions :permissions="$permissions" :user="$user" :show="false" />
        </div>
    </div>
</x-app-layout>
