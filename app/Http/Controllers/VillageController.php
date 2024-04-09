<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Village;
use App\Models\District;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VillageController extends Controller
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
        } elseif (Auth::user()->getRoleNames()->first() == 'One Kecamatan') {
            $districts = District::where('user_id', Auth::user()->id)->get();
            $coll_district = collect($districts);
            $villages = Village::whereIn('district_id', $coll_district->pluck('id'))->get();
        } else {
            $villages = Village::get();
        }

        return view('pages.datas.villages.index', compact('villages'));
    }

    public function show(Village $village)
    {
        return view('pages.datas.villages.index', compact('village'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Village $village)
    {
        $users = User::role('One Wilayah')->get();
        // dd($users);
        return view('pages.datas.villages.edit', compact('village', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Village $village)
    {
        $village->update([
            'user_id' => request('user_id'),
        ]);
        return redirect()->route('village.index')->with('success', request('village_name') . ' berhasil di perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Village $village)
    {
        $village->delete();
        return redirect(route('village.index'))->with('success', $village->village_name . ' berhasil di hapus');
    }
}
