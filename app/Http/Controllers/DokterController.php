<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('tbl_dokter')->get();
        return view('dokter.index', compact('data'));
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
        DB::table('tbl_dokter')->insert([
            'name' => $request->ndokter,
            'spesialis' => $request->nspesialis,
            'alamat' => $request->nalamat,
            'telepon' => $request->nkontak,
        ]);
        return redirect()->back();
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
        $data = DB::table('tbl_dokter')->where('id', $id)->get();

        return view('dokter.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('tbl_dokter')->where('id', $id)->update([
            'name' => $request->ndokter,
            'spesialis' => $request->sdokter,
            'alamat' => $request->adokter,
            'telepon' => $request->tdokter
        ]);

        return redirect('/dokter');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tbl_dokter')->where('id', $id)->delete();
        return redirect()->back();
    }
}