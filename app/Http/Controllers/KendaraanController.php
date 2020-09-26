<?php

namespace App\Http\Controllers;

use App\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kendaraans = Kendaraan::all();
        return view('kendaraans.index', compact('kendaraans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kendaraans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'plat' => 'required | max:8',
            'merk' => 'required | min:4',
            'name' => 'required'
        ]);

        Kendaraan::create([
            'noPlat' => $request->plat,
            'merkKendaraan' => $request->merk,
            'namaPemilik' => $request->name
        ]);

        
        // Kendaraan::create($request->all());
        return redirect('/kendaraans')->with('status', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function show(Kendaraan $kendaraan)
    {
        //
        return view('kendaraans.show', compact('kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kendaraan $kendaraan)
    {
        //
        return view('kendaraans.edit', compact('kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        //
        $request->validate([
            'plat' => 'required | max:8',
            'merk' => 'required | min:4',
            'name' => 'required'
        ]);

        Kendaraan::where('id', $kendaraan->id)
            ->update([
                'noPlat' => $request->plat,
                'merkKendaraan' => $request->merk,
                'namaPemilik' => $request->name
            ]);
            return redirect('/kendaraans')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kendaraan $kendaraan)
    {
        //
        Kendaraan::destroy($kendaraan->id);
        return redirect('/kendaraans')->with('status', 'Data Berhasil Dihapus!');
    }
}
