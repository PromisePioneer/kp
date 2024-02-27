<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RkpmdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('tbl_rkpmds')
            ->join('tbl_pasien', 'tbl_pasien.id', '=', 'tbl_rkpmds.pasien_id')
            ->join('tbl_dokter', 'tbl_dokter.id', '=', 'tbl_rkpmds.dokter_id')
            ->join('tbl_obat', 'tbl_obat.id', '=', 'tbl_rkpmds.obat_id')
            ->join('tbl_ruangan', 'tbl_ruangan.id', '=', 'tbl_rkpmds.ruangan_id')
            ->select('tbl_rkpmds.*', 'tbl_pasien.name as nmpsn', 'tbl_dokter.name as nmdktr', 'tbl_ruangan.name as nmrgn', 'tbl_obat.name as nmobt')
            ->get();

        return view('rkpmds.index', compact('data'));
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
        DB::table('tbl_rkpmds')->insert([
            'pasien_id' => $request->pasien,
            'dokter_id' => $request->dokter,
            'obat_id' => $request->obat,
            'ruangan_id' => $request->ruangan,
        ]);
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
        $data = DB::table('tbl_rkpmds')->where('id', $id)->get();
        return view('rkpmds.edit', compact('data'));
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