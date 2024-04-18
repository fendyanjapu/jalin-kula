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
    public function edit(JadwalKegiatan $jadwalKegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JadwalKegiatan $jadwalKegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JadwalKegiatan $jadwalKegiatan)
    {
        //
    }
}
