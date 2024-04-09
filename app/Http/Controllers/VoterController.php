<?php

namespace App\Http\Controllers;

use App\Models\Tps;
use App\Models\User;
use App\Models\Voter;
use App\Models\Region;
use App\Models\Village;
use App\Models\District;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VoterController extends Controller
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
            $coll_tps = collect($tpss);
            $voters = Voter::whereIn('tps_id', $coll_tps->pluck('id'))->get();
        } elseif (Auth::user()->getRoleNames()->first() == 'One Kecamatan') {
            $districts = District::where('user_id', Auth::user()->id)->get();
            $coll_district = collect($districts);
            $villages = Village::whereIn('district_id', $coll_district->pluck('id'))->get();
            $coll_village = collect($villages);
            $tpss = Tps::whereIn('village_id', $coll_village->pluck('id'))->get();
            $coll_tps = collect($tpss);
            $voters = Voter::whereIn('tps_id', $coll_tps->pluck('id'))->get();
        } elseif (Auth::user()->getRoleNames()->first() == 'One Desa/Kelurahan') {
            $villages = Village::where('user_id', Auth::user()->id)->get();
            $coll_village = collect($villages);
            $tpss = Tps::whereIn('village_id', $coll_village->pluck('id'))->get();
            $coll_tps = collect($tpss);
            $voters = Voter::whereIn('tps_id', $coll_tps->pluck('id'))->get();
        } elseif (Auth::user()->getRoleNames()->first() == 'One Desa/Kelurahan') {
            $tpss = Tps::where('user_id', Auth::user()->id)->get();
            $coll_tps = collect($tpss);
            $voters = Voter::whereIn('tps_id', $coll_tps->pluck('id'))->get();
        } else {
            $voters = Voter::get();
        }
        return view('pages.voters.index', compact('voters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd(Auth::user()->getRoleNames()->first());
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
        $voter = new Voter();
        $districts = District::get();
        return view('pages.voters.create', compact('voter', 'districts', 'tpss'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(request());
        request()->validate([
            'voter_image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'voter_potential' => 'required',

        ]);

        $file = $request->file('voter_image');
        $fileName = Str::slug($request->input('voter_name')) . date('Ymdhis') . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/voter'), $fileName);
        $file = new Voter;
        $file->voter_image = $fileName;
        $file->voter_name = $request->input('voter_name');
        $file->tps_id = $request->input('tps_id');
        $file->gender = $request->input('gender');
        $file->voter_potential = $request->input('voter_potential');
        $file->user_id = auth()->user()->id;
        $file->save();


        return redirect()->route('voter.index')->with('success', "$request->voter_name Berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Voter $voter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voter $voter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voter $voter)
    {
        //
    }
    public function map()
    {
        return view('pages.voters.map');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voter $voter)
    {
        //
    }
}