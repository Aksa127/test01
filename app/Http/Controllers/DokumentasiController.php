<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dokumentasi;
use App\Http\Requests\StoredokumentasiRequest;
use App\Http\Requests\UpdatedokumentasiRequest;

class DokumentasiController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    // public function home() {
    //     return view('home');
    // }

    public function index()
    {
        $dokumentasi = Dokumentasi::all();
        return view('home', compact('dokumentasi'));
    }

    public function store(Request $request){
        $request->validate([
           'nama' => 'required|string|max:255',
           'tanggal' => 'required|date',
           'keterangan' => 'required|string'
        ]);

        Dokumentasi::create($request->all());
        return redirect()->route('dokumentasi.index');
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
    // public function store(StoredokumentasiRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show(dokumentasi $dokumentasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dokumen = Dokumentasi::findOrFail($id);
        return view('edit', compact('dokumen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedokumentasiRequest $request, dokumentasi $dokumentasi)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'keterangan' => 'required|string'
         ]);

         $dokumen = Dokumentasi::findOrdFail($id);
         $dokumen->update($request->all());
         return redirect()->route('dokumentasi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dokumentasi $dokumentasi)
    {
        //
    }
}
