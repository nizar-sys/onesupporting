<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Region;
use App\Models\Village;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $region = Region::where('user_id', Auth::user()->id)->first();
        if (isset($region)) {
            $districts = District::where('region_id', $region->id)->get();
        } else {
            $districts = District::get();
        }
        return view('pages.datas.districts.index', compact('districts'));
    }

    public function show(District $district)
    {
        $villages = Village::where('district_id', $district->id)->get();
        return view('pages.datas.villages.index', compact('villages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(District $district)
    {
        $users = User::role('One Wilayah')->get();
        // dd($users);
        return view('pages.datas.districts.edit', compact('district', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(District $district)
    {
        $district->update([
            'user_id' => request('user_id'),
        ]);
        return redirect()->route('district.index')->with('success', request('district_name') . ' berhasil di perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(District $district)
    {
        $district->delete();
        return redirect(route('district.index'))->with('success', $district->district_name . ' berhasil di hapus');
    }
}
