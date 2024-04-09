<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Region;
use App\Models\Tps;
use App\Models\Village;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions = Region::get();
        $total_2014 = Village::sum('voter_2014');
        $total_2019 = Village::sum('voter_2019');
        $total_tps = Tps::count('id');
        return view('pages.datas.regions.index', compact('regions', 'total_2014', 'total_2019', 'total_tps'));
    }

    public function show(Region $region)
    {
        $show = true;
        $users = User::role('One Wilayah')->get();

        return view('pages.datas.regions.show', compact('region', 'show', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Region $region)
    {
        $users = User::role('One Wilayah')->get();
        // dd($users);
        return view('pages.datas.regions.edit', compact('region', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Region $region)
    {
        $region->update([
            'user_id' => request('user_id'),
        ]);
        return redirect()->route('region.index')->with('success', request('region_name') . ' berhasil di perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Region $region)
    {
        $region->delete();
        return redirect(route('region.index'))->with('success', $region->region_name . ' berhasil di hapus');
    }
}
