<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Member;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class MemberRegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinsi = Provinsi::all();
        $kabupaten = Kabupaten::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        return view('index', compact('provinsi', 'kabupaten', 'kecamatan', 'kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ktp_number' => 'required',
            'name' => 'required',
            'phone_number' => 'required',
            'provinsi_id' => 'required',
            'kabupaten_id' => 'required',
            'kecamatan_id' => 'required',
            'kelurahan_id' => 'required',
        ]);

        $member = new Member();
        $member->ktp_number = $request->ktp_number;
        $member->name = $request->name;
        $member->phone_number = $request->phone_number;
        $member->provinsi_id = $request->provinsi_id;
        $member->kabupaten_id = $request->kabupaten_id;
        $member->kecamatan_id = $request->kecamatan_id;
        $member->kelurahan_id = $request->kelurahan_id;
        $member->save();
        
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
