<?php

namespace App\Http\Controllers;

use App\Models\Modeltransaksibeli;
use Illuminate\Http\Request;

class pemprosessan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_user = Auth::user()->id;
        // $namapetani = Auth::user()->name;
        $response = DB::table('tambahbelis')->select('*')->where('id_user', $id_user)->where('statusverifikasi', 1)->get();
        $data = json_decode($response, True);
        
        // return redirect('pages/myprofile');
        // return dd($data);
        return view('pages/pemprosesan',compact('data'));
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
        $data = Modeltransaksibeli::find($id);
        $panen_tanggal = $request->input('tanggal');

        // panen hasil produksi
        $panenhasil = $request->input('hasilproduksi');
        $stnpanenhasil = $request->input('stnpanenhasil');
        // $resulthasilpanen = $panenhasil;
        // if ($stnpanenhasil == "Kuintal") {
        //     $resulthasilpanen = $resulthasilpanen * 100;
        // }
        // if ($stnpanenhasil == "Ton") {
        //     $resulthasilpanen = $resulthasilpanen * 1000;
        // } else {
        //     $resulthasilpanen = $resulthasilpanen;
        // }

        // panen kualitas a
        $panenkualitas_a = $request->input('kualitasA');
        // $stnpanenkualitas_a = $request->input('stnpanenkualitas_a');
        // $resultpanenkualitas_a = $panenkualitas_a;
        // if ($stnpanenkualitas_a == "Kuintal") {
        //     $resultpanenkualitas_a = $resultpanenkualitas_a * 100;
        // }
        // if ($stnpanenkualitas_a == "Ton") {
        //     $resultpanenkualitas_a = $resultpanenkualitas_a * 1000;
        // } else {
        //     $resultpanenkualitas_a = $resultpanenkualitas_a;
        // }

        // panen kualitas b
        $panenkualitas_b = $request->input('kualitasB');
        // $stnpanenkualitas_b = $request->input('stnpanenkualitas_b');
        // $resultpanenkualitas_b = $panenkualitas_b;
        // if ($stnpanenkualitas_b == "Kuintal") {
        //     $resultpanenkualitas_b = $resultpanenkualitas_b * 100;
        // }
        // if ($stnpanenkualitas_b == "Ton") {
        //     $resultpanenkualitas_b = $resultpanenkualitas_b * 1000;
        // } else {
        //     $resultpanenkualitas_b = $resultpanenkualitas_b;
        // }

        // panen kualitas c 
        $panenkualitas_c = $request->input('kualitasC');
        // $stnpanenkualitas_c = $request->input('stnpanenkualitas_c');
        // $resultpanenkualitas_c = $panenkualitas_c;
        // if ($stnpanenkualitas_c == "Kuintal") {
        //     $resultpanenkualitas_c = $resultpanenkualitas_c * 100;
        // }
        // if ($stnpanenkualitas_c == "Ton") {
        //     $resultpanenkualitas_c = $resultpanenkualitas_c * 1000;
        // } else {
        //     $resultpanenkualitas_c = $resultpanenkualitas_c;
        // }

        $data->update([
            // 'id_user' => $currentuserid,
            // 'id_lokasisawah' => $datalokasi,
            'panen_tanggal' => $panen_tanggal,
            // 'panen_hasil_produksi' => $resulthasilpanen,
            'kualitasA' => $panenkualitas_a,
            'kualitasB' => $panenkualitas_b,
            'kualitasC' => $panenkualitas_c
        ]);



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
