<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('tbl_ruangan')->get();

        return view('ruangan.index', compact('data'));
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
        DB::table('tbl_ruangan')->insert([
            'name' => $request->nruangan,
            'keterangan' => $request->keterangan,
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
        $data = DB::table('tbl_ruangan')->where('id', $id)->get();

        return view('ruangan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('tbl_ruangan')->where('id', $id)->update([
            'name' => $request->nruang,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/ruangan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tbl_ruangan')->where('id', $id)->delete();

        return redirect()->back();
    }
}