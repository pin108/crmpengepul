<?php

namespace App\Http\Controllers;

use App\Models\Biodatapengepul;
use Illuminate\Http\Request;
use Auth;

class BiodatapengepulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('biodata/formbiodata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $nohp = $request->input('nohp');
        $noktp = $request->input('npktp');
        $kabupaten = $request->input('kabupaten');
        // $nama = $request->input('nama');
        // $nama = $request->input('nama');
        $currentuserid = Auth::user()->id;
        Biodatapengepul::create([
            'id_user' => $currentuserid,
            'alamat' => $alamat,
            'nama' => $nama,
            'nohp' => $nohp,
            'noktp' => $noktp,
            'kabupaten' => $kabupaten
        ]);

        Biodatapengepul::create($request->all());
        return redirect('/formbiodata')->with('status', 'Biodata pengepul telah berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
