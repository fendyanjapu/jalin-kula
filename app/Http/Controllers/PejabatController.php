<?php

namespace App\Http\Controllers;

use App\Models\Pejabat;
use Illuminate\Http\Request;

class PejabatController extends Controller
{
    private $rules = [
        'nama_pejabat'=> 'required|max:255',
        'jabatan'=> 'required|max:255',
        'no_wa'=> 'required|max:20', 
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.pejabat.index", [
            'no' => 0,
            'pejabats' => Pejabat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pejabat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->rules);
        Pejabat::create($validatedData);

        return redirect(route('pejabat.index'))->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pejabat $pejabat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pejabat $pejabat)
    {
        return view('admin.pejabat.edit', [
            'pejabat'=> $pejabat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pejabat $pejabat)
    {
        $validatedData = $request->validate($this->rules);
        Pejabat::findOrFail($pejabat->id)->update($validatedData);

        return redirect(route('pejabat.index'))->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pejabat $pejabat)
    {
        Pejabat::destroy($pejabat->id);
        return redirect(route('pejabat.index'))->with('success','Data berhasil dihapus');
    }
}
