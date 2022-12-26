<?php

namespace App\Http\Controllers;

use App\Models\Biodatapengepul;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class pendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_user = Auth::user()->id;

        $response = DB::table('daftarpengepuls')->select('*')->where('id_user', $id_user)->get();
        $data = json_decode($response, True);
        // return redirect('pages/myprofile');
        // return dd($data);
        return view('pages/myprofile',compact('data'));
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
        $id_user = Auth::user()->id;
        $nohp = $request->input('nohp');
        $noktp = $request->input('npktp');
        $kabupaten = $request->input('kabupaten');
        // $nama = $request->input('nama');
        // $nama = $request->input('nama');
        // $currentuserid = Auth::id();
        Biodatapengepul::create([
            // 'id_user' => $currentuserid,
            'alamat' => $alamat,
            'nama' => $nama,
            'nohp' => $nohp,
            'id_user' => $id_user,
            'noktp' => $noktp,
            'kabupaten' => $kabupaten
        ]);

        // Biodatapengepul::create($request->all());
        return redirect('/pages/myprofile')->with('status', 'Biodata pengepul telah berhasil dibuat');
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
