<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Region;
use App\Models\Village;
use App\Models\District;
use App\Models\One;
use App\Models\Tps;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class OneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (Auth::user()->getRoleNames()->first() == 'One Wilayah') {
            $region = Region::where('user_id', Auth::user()->id)->first();
            $districts = District::where('region_id', $region->id)->get();
            $coll_district = collect($districts);
            $villages = Village::whereIn('district_id', $coll_district->pluck('id'))->get();
            $coll_village = collect($villages);
            $tpss = Tps::whereIn('village_id', $coll_village->pluck('id'))->get();
            $coll_tpss = collect($tpss);
            $users = User::whereIn('tps_id', $coll_tpss->pluck(['id']))->get();
        } else {
            $users = User::whereNotIn('id', [1, 2])->get();
            // $users = User::get();
        }
        return view('pages.ones.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->getRoleNames()->first() == 'One Wilayah') {
            $region = Region::where('user_id', Auth::user()->id)->first();
            $districts = District::where('region_id', $region->id)->get();
            $coll_district = collect($districts);
            $villages = Village::whereIn('district_id', $coll_district->pluck('id'))->get();
            $coll_village = collect($villages);
            $tpss = Tps::whereIn('village_id', $coll_village->pluck('id'))->get();
        } elseif (Auth::user()->getRoleNames()->first() == 'One Kecamatan') {
            $districts = District::where('user_id', Auth::user()->id)->get();
            $coll_district = collect($districts);
            $villages = Village::whereIn('district_id', $coll_district->pluck('id'))->get();
            $coll_village = collect($villages);
            $tpss = Tps::whereIn('village_id', $coll_village->pluck('id'))->get();
        } elseif (Auth::user()->getRoleNames()->first() == 'One Desa/Kelurahan') {
            $villages = Village::where('user_id', Auth::user()->id)->get();
            $coll_village = collect($villages);
            $tpss = Tps::whereIn('village_id', $coll_village->pluck('id'))->get();
        } elseif (Auth::user()->getRoleNames()->first() == 'One Tps') {
            $tpss = Tps::where('user_id', Auth::user()->id)->get();
        } else {
            $tpss = Tps::get();
        }
        $one = new User;
        $districts = District::get();
        $roles = Role::whereNotIn('id', [1, 2, 3, 4, 5])->get();
        $status = null;
        return view('pages.ones.create', compact('one', 'districts', 'roles', 'status', 'tpss'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
            'email' => 'unique:users,email'
        ]);
        User::create([
            'name' => Str::title(request('name')),
            'email' => request('email'),
            'email_verified_at' => now(),
            'password' => bcrypt('onesupporting'),
            'tps_id' => request('tps_id'),
            'gender' => request('gender'),
            'is_active' => request('is_active'),
        ]);

        $user = User::latest('id')->first();
        $user->assignRole(request('status'));
        return redirect()->route('one.index')->with('success', request('name') . ' berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $one)
    {
        $one = $one;
        $districts = District::get();
        $roles = Role::whereNotIn('id', [1, 2, 3, 4, 5])->get();
        $status = $one->getRoleNames()->first();
        return view('pages.ones.show', compact('one', 'districts', 'roles', 'status'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $one)
    {
        $one = $one;
        $districts = District::get();
        $roles = Role::whereNotIn('id', [1, 2, 3, 4, 5])->get();
        $status = $one->getRoleNames()->first();
        return view('pages.ones.edit', compact('one', 'districts', 'roles', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $one)
    {
        request()->validate([
            'email' => 'unique:users,name,' . $one->id,
        ]);

        $one->update([
            'name' => Str::title(request('name')),
            'email' => request('email'),
            'email_verified_at' => now(),
            'password' => $one->password,
            'village_id' => request('village_id'),
            'gender' => request('gender'),
            'is_active' => request('is_active'),
        ]);

        $one->assignRole(request('status'));
        return redirect()->route('one.index')->with('success', request('name') . ' berhasil di perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $one)
    {
        $one->delete();
        return redirect()->route('one.index')->with('success', $one->name . ' berhasil di hapus');
    }
}
