<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('pages.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role        = null;
        $roles       = Role::where('id', '!=', 1)->get();
        $permissions = Permission::orderBy('name', 'asc')->get();
        $user        = new User;
        return view('pages.users.create', compact('permissions', 'user', 'role', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user)
    {

        request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'role' => 'required',
        ]);
        $user->create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt('password'),
            'image' => 'default.png',
            'is_active' => request('is_active'),
            'approved' => 0,
        ]);

        $user->assignRole(request('role'));

        $permissions = !empty(request('permissions')) ? request('permissions') : [];
        $user->syncPermissions($permissions);
        return redirect()->route('user.index')->with('success', 'User ' . request('name') . ' has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $permissions = Permission::orderBy('name', 'asc')->get();
        $show = true;
        return view('pages.users.show', compact('permissions', 'user', 'show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $permissions = Permission::orderBy('name', 'asc')->get();
        return view('pages.users.edit', compact('permissions', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {
        // dd(request());
        request()->validate([
            'name' => "required|unique:users,name,$user->id"
        ]);

        $user->update([
            'name' => Str::title(request('name')),
        ]);
        $permissions = !empty(request('permissions')) ? request('permissions') : [];
        $user->syncPermissions($permissions);
        return redirect()->route('user.index')->with('success', 'User ' . request('name') . ' has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User ' . $user->name . ' has been deleted');
    }
}
