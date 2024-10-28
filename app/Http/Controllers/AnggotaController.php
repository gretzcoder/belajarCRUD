<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::all();
        
        return view('anggota.index', ['anggota' => $anggota]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi

        //Store data ke db
        $anggota = new Anggota();
        $anggota->nama = $request->nama;
        $anggota->no_hp = $request->hp;
        $anggota->save();

        return redirect('anggota')->with('sukses', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anggota = Anggota::find($id);
        $anggota->nama = $request->nama;
        $anggota->no_hp = $request->hp;
        $anggota->save();

        return redirect('anggota')->with('sukses', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();

        return redirect('anggota')->with('sukses', 'Data berhasil dihapus.');
    }
}
