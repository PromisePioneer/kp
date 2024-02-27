<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('tbl_obat')->get();

        return view('obat.index', compact('data'));
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
        DB::table('tbl_obat')->insert([
            'name' => $request->nobat,
            'sediaan' => $request->nsediaan,
            'dosis' => $request->ndosis,
            'satuan' => $request->nsatuan,
            'stok' => $request->nstok,
            'harga' => $request->nharga,
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
        $data = DB::table('tbl_obat')->where('id', $id)->get();

        return view('obat.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('tbl_obat')->where('id', $id)->update([
            'name' => $request->nobat,
            'sediaan' => $request->nsediaan,
            'dosis' => $request->ndosis,
            'satuan' => $request->nsatuan,
            'stok' => $request->nstok,
            'harga' => $request->nharga,
        ]);

        return redirect('obat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tbl_obat')->where('id', $id)->delete();

        return redirect()->back();
    }
}