<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::get();
        return view('pages.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::orderBy('name', 'asc')->get();
        $role        = new Role;
        return view('pages.roles.create', compact('permissions', 'role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
            'name' => 'required|unique:roles'
        ]);

        Role::create([
            'name' => Str::title(request('name')),
        ]);

        $role = Role::latest('id')->first();
        $permissions = !empty(request('permissions')) ? request('permissions') : [];
        $role->syncPermissions($permissions);
        return redirect()->route('role.index')->with('success', 'Role ' . request('name') . ' has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        $permissions = Permission::orderBy('name', 'asc')->get();
        $show = true;
        return view('pages.roles.show', compact('permissions', 'role', 'show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::orderBy('name', 'asc')->get();
        return view('pages.roles.edit', compact('permissions', 'role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Role $role)
    {
        // dd(request());
        request()->validate([
            'name' => "required|unique:roles,name,$role->id"
        ]);

        $role->update([
            'name' => Str::title(request('name')),
        ]);
        $permissions = !empty(request('permissions')) ? request('permissions') : [];
        $role->syncPermissions($permissions);
        return redirect()->route('role.index')->with('success', 'Role ' . request('name') . ' has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('role.index')->with('success', 'Role ' . $role->name . ' has been deleted');
    }
}
