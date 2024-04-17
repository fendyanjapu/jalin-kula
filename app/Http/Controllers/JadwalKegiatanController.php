<?php

namespace App\Http\Controllers;

use App\Models\JadwalKegiatan;
use App\Models\Pejabat;
use Illuminate\Http\Request;

class JadwalKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.jadwal-kegiatan.index', [
            'no'=> 0,
            'jadwals'=> JadwalKegiatan::where('verifikasi', '=', 1 )->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.jadwal-kegiatan.create', [
            'i'=> 0,
            'pejabats'=> Pejabat::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_kegiatan'=> 'required|max:255',
            'dari'=> 'required|max:255',
            'tempat_kegiatan'=> 'required|max:255',
            'tanggal_kegiatan'=> 'required|date',
            'waktu'=> 'required|max:255',
            'pakaian'=> 'required|max:255',
            'no_hp'=> 'required|max:255',
        ];
        $tanggal_kegiatan = $request->tanggal_kegiatan;

        if ($tanggal_kegiatan != '0000-00-00') {
            $diundang = '';
            $yang_diundang = $request->yang_diundang;

            if ($yang_diundang != '') {
                foreach ($yang_diundang as $item) {
                    $diundang .= $item . '<br>';
                }
            }

            $validatedData = $request->validate($rules);
            $validatedData['verifikasi'] = '0';
            $validatedData['yang_diundang'] = $diundang;

            JadwalKegiatan::create($validatedData);

            return redirect()->route('jadwal-kegiatan.index')->with('success','Undangan Kegiatan Berhasil Disimpan. Tunggu Verifikasi Admin');
        }
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
