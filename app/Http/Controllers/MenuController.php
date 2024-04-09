<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $menus = Menu::get();
        return view('pages.menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu        = new Menu;
        $menus         = Menu::where('parent_id', null)->get();
        return view('pages.menus.create', compact('menu', 'menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        // dd(request('parent_id'));
        request()->validate([
            'name' => 'required|unique:menus',
            'url' => 'required|unique:menus',
            'permission_name' => 'required|unique:menus',
        ]);
        $permissions = collect([
            request('permission_name') . '_create',
            request('permission_name') . '_delete',
            request('permission_name') . '_edit',
            request('permission_name') . '_show',
        ]);

        if (request('parent_id') == null) {
            $prefix = request('prefix');
        } else {
            $getmenu = Menu::whereId(request('parent_id'))->first();
            $prefix = $getmenu->prefix;
        }
        // dd($prefix);

        Menu::create([
            'parent_id' => request('parent_id') ?? null,
            'name' => Str::title(request('name')),
            'url' => Str::lower(request('url')),
            'icon' => (request('icon') != null ? Str::lower(request('icon')) : 'fe-circle'),
            'permission_name' => Str::lower(request('permission_name')),
            'prefix' => Str::lower($prefix),
            'is_active' => request('is_active'),
        ]);

        $permissions->each(function ($permission) {
            Permission::create([
                'name' => $permission
            ]);
        });

        return redirect()->route('menu.index')->with('success', 'Menu ' . request('name') . ' has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        $menus = Menu::where('parent_id', null)->get();
        $show = true;
        return view('pages.menus.show', compact('menus', 'menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        $menus         = Menu::where('parent_id', null)->get();
        return view('pages.menus.edit', compact('menu', 'menus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Menu $menu)
    {
        request()->validate([
            'name' => 'required|unique:menus,name,' . $menu->id,
            'url' => 'required|unique:menus,name,' . $menu->id,
            'permission_name' => 'required|unique:menus,name,' . $menu->id,
        ]);
        $menu->update([
            'parent_id' => request('parent_id') ?? null,
            'name' => Str::title(request('name')),
            'url' => Str::lower(request('url')) ? Str::lower(request('url')) : 'fe-circle',
            'icon' => Str::lower(request('icon')) ?? null,
            'permission_name' => Str::lower(request('permission_name')),
            'prefix' => Str::lower(request('prefix')),
            'is_active' => request('is_active'),
        ]);

        return redirect()->route('menu.index')->with('success', 'Menu ' . request('name') . ' has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $get_permission_name = [
            $menu->permission_name,
            $menu->permission_name . '_create',
            $menu->permission_name . '_delete',
            $menu->permission_name . '_edit',
            $menu->permission_name . '_show',
        ];
        Permission::whereIn('name', $get_permission_name)->delete();

        // dd($permId);
        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Menu ' . $menu->name . ' has been deleted');
    }
}
