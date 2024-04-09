<?php

namespace App\Http\Controllers;

use App\Models\Tps;
use App\Models\User;
use App\Models\Region;
use App\Models\Village;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TpsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Auth::user()->id);
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
        } else {
            $tpss = Tps::get();
        }
        return view('pages.datas.tps.index', compact('tpss'));
    }

    public function show(Tps $tps)
    {
        $show = true;
        $users = User::role('One Desa/Kelurahan')->get();
        return view('pages.datas.tps.show', compact('tps', 'show', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tps $tps)
    {
        $users = User::role('One Wilayah')->get();
        // dd($users);
        return view('pages.datas.tps.edit', compact('tps', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Tps $tps)
    {
        $tps->update([
            'user_id' => request('user_id'),
        ]);
        return redirect()->route('tps.index')->with('success', request('tps_name') . ' berhasil di perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tps $tps)
    {
        $tps->delete();
        return redirect(route('tps.index'))->with('success', $tps->tps_name . ' berhasil di hapus');
    }
}
