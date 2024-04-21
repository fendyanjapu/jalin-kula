<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiKegiatan;
use Illuminate\Support\Facades\Storage;

class DokumentasiKegiatanController extends Controller
{
    private $rules = [
        "nama_kegiatan"=> "required|max:255",
        "foto"=> "required|image|file|max:4096"
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.dokumentasi.index", ["dokumentasi_kegiatans"=> DokumentasiKegiatan::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.dokumentasi.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->rules);
        $validatedData['foto'] = $request->file('foto')->store('dokumentasi-kegiatan');

        DokumentasiKegiatan::create($validatedData);
        return redirect(route('dokumentasi-kegiatan.index'))->with('success','Dokumentasi Kegiatan Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(DokumentasiKegiatan $dokumentasiKegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DokumentasiKegiatan $dokumentasiKegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DokumentasiKegiatan $dokumentasiKegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DokumentasiKegiatan $dokumentasiKegiatan)
    {
        Storage::delete($dokumentasiKegiatan->foto);
        $dokumentasiKegiatan::destroy($dokumentasiKegiatan->id);
        return redirect(route('dokumentasi-kegiatan.index'))->with('success','Data berhasil dihapus');
    }
}
