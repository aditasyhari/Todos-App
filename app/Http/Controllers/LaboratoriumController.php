<?php

namespace App\Http\Controllers;

use App\Laboratorium;
use Illuminate\Http\Request;

class LaboratoriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $laboratoriums = Laboratorium::all();
        return view('laboratoriums.index', compact('laboratoriums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('laboratoriums.create');
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
            'name' => 'required',
            'ket' => 'required | min:4'
        ]);

        Laboratorium::create([
            'name' => $request->name,
            'ket' => $request->ket
        ]);

        
        return redirect('/laboratoriums')->with('status', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laboratorium  $laboratorium
     * @return \Illuminate\Http\Response
     */
    public function show(Laboratorium $laboratorium)
    {
        //
        return view('laboratoriums.show', compact('laboratorium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laboratorium  $laboratorium
     * @return \Illuminate\Http\Response
     */
    public function edit(Laboratorium $laboratorium)
    {
        //
        return view('laboratoriums.edit', compact('laboratorium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laboratorium  $laboratorium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laboratorium $laboratorium)
    {
        //
        $request->validate([
            'name' => 'required',
            'ket' => 'required | min:4'
        ]);

        Laboratorium::where('id', $laboratorium->id)
            ->update([
                'name' => $request->name,
                'ket' => $request->ket
            ]);
            return redirect('/laboratoriums')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laboratorium  $laboratorium
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboratorium $laboratorium)
    {
        //
        Laboratorium::destroy($laboratorium->id);
        return redirect('/laboratoriums')->with('status', 'Data Berhasil Dihapus!');
    }
}
