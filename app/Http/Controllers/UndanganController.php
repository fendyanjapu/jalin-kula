<?php

namespace App\Http\Controllers;

use App\Models\JadwalKegiatan;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.undangan-kegiatan.index', [
            'no'=> 1,
            'pageNo'=> 0,
            'jadwals'=> JadwalKegiatan::latest()->get()
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(JadwalKegiatan $jadwalKegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JadwalKegiatan $undangan_kegiatan)
    {
        return view('admin.undangan-kegiatan.edit', ['jadwalKegiatan' => $undangan_kegiatan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JadwalKegiatan $undangan_kegiatan)
    {
        $rules = [
            'nama_kegiatan'=> 'required|max:255',
            'dari'=> 'required|max:255',
            'tempat_kegiatan'=> 'required|max:255',
            'tanggal_kegiatan'=> 'required|date',
            'waktu'=> 'required|max:255',
            'pakaian'=> 'required|max:255',
        ];
        $validatedData = $request->validate($rules);
        $undangan_kegiatan->update($validatedData);

        return redirect()->route('undangan-kegiatan.index')->with('success','Jadwal Kegiatan Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jadwalKegiatan = JadwalKegiatan::findOrFail( $id );
        $jadwalKegiatan->delete();

        return redirect()->route('undangan-kegiatan.index')->with('success','Jadwal berhasil dihapus');
    }

    public function verifikasi()
    {

    }
}