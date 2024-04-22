<?php

namespace App\Http\Controllers;

use App\Models\JadwalKegiatan;
use App\Models\Pejabat;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.undangan-kegiatan.index', [
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
    public function show(JadwalKegiatan $undangan_kegiatan)
    {
        return view('admin.undangan-kegiatan.show', ['jadwalKegiatan' => $undangan_kegiatan]);
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

    public function verifikasi(Request $request, JadwalKegiatan $undangan_kegiatan)
    {
        $rules = [
            'verifikasi'=> 'required|max:255',
        ];
        $validatedData = $request->validate($rules);
        $validatedData['tanggal_verifikasi'] = date('Y-m-d');
        $undangan_kegiatan->update($validatedData);

        return redirect()->route('undangan-kegiatan.index')->with('success','Jadwal Kegiatan Diverifikasi');
    }

    public function hadiri_undangan(JadwalKegiatan $undangan_kegiatan)
    {
        if (auth()->user()->username == 'bupati') {
            $pejabats = Pejabat::where('id', '>', '1')->get();
        } elseif (auth()->user()->username == 'sekda') {
            $pejabats = Pejabat::where('id', '>', '6')->get();
        }
        return view('admin.undangan-kegiatan.hadiri_undangan', [
            'jadwalKegiatan' => $undangan_kegiatan,
            'pejabats'=> $pejabats
        ]);
    }

    public function dihadiri(Request $request, JadwalKegiatan $undangan_kegiatan)
    {
        $data = $request->all();
        if (auth()->user()->username == 'sekda') {
            $data['dihadiri'] = '2';
        }
        $undangan_kegiatan->update($data);

        return redirect()->route('undangan-kegiatan.index')->with('success','Jadwal Kegiatan Diupdate');
    }

    public function tambah_yg_hadir(JadwalKegiatan $undangan_kegiatan)
    {
        return view('admin.undangan-kegiatan.tambah_yg_hadir', [
            'jadwalKegiatan' => $undangan_kegiatan
        ]);
    }

    public function update_yg_hadir(Request $request, JadwalKegiatan $undangan_kegiatan)
    {
        $tambahan_yang_hadir = '';
        $tambahan = $request->input('tambahan_yang_hadir');

        if ($tambahan != '') {
	        foreach ($tambahan as $item) {
    	        $tambahan_yang_hadir .= $item.'<br>';
    	    }
	    }

        $data['tambahan_yang_hadir'] = $tambahan_yang_hadir;
        $undangan_kegiatan->update($data);
        
        return redirect()->route('undangan-kegiatan.index')->with('success','Jadwal Kegiatan Diupdate');
    }
}
