<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('tbl_pasien')->get();
        $poli = DB::table('tbl_poli')->get();
        return view('pasien.index', compact('data', 'poli'));
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

        DB::table('tbl_pasien')->insert([
            'name' => $request->npasien,
            'alamat' => $request->nalamat,
            'telepon' => $request->ntelepon,
            'poli_id' => $request->poli,
            'tgl_lahir' => $request->ntglhir,
            'pendidikan' => $request->npendidikan,
            'pekerjaan' => $request->npekerjaan,
            'nobpjs' => $request->nbpjs,
            'alergi' => $request->nalergi,
            'jkelamin' => $request->njklmin,
            'keluhan' => $request->keluhan
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $see = DB::table('tbl_pasen')->get();

        return view('poli.index', compact('see'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table('tbl_pasien')->where('id', $id)->get();

        return view('pasien.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('tbl_pasien')->where('id', $id)->update([
            'name' => $request->npasien,
            'alamat' => $request->nalamat,
            'telepon' => $request->ntelepon,
            'tgl_lahir' => $request->ntglhr,
            'pendidikan' => $request->npendidikan,
            'pekerjaan' => $request->npekerjaan,
            'nobpjs' => $request->nbpjs,
            'alergi' => $request->nalergi,
            'jkelamin' => $request->njklmin,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tbl_pasien')->where('id', $id)->delete();

        return redirect()->back();
    }
}
