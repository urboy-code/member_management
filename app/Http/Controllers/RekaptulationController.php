<?php

namespace App\Http\Controllers;

use App\Exports\MembersExport;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Member;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RekaptulationController extends Controller
{
    public function index()
    {

        $provinsi = Provinsi::withCount('members')->get();
        $kabupaten = Kabupaten::withCount('members')->get();
        $kecamatan = Kecamatan::withCount('members')->get();
        $kelurahan = Kelurahan::withCount('members')->paginate(5);
        $member = Member::with(['provinsi', 'kabupaten', 'kecamatan', 'kelurahan'])->paginate(5);

        return view('dashboard.rekaptulation', compact('provinsi', 'kabupaten', 'kecamatan', 'kelurahan', 'member'));
    }

    public function show($id)
    {
        $member = Member::findOrFail($id); // Menemukan anggota berdasarkan ID atau gagal

        return view('rekaptulation.show', compact('member'));
    }

    public function export(Request $request)
    {
        $filter = [];
        return Excel::download(new MembersExport($filter), 'rekaptulation_anggota.xlsx');
    }
}
