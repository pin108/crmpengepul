<?php

namespace App\Http\Controllers;

use App\Models\Modelpemprosessan;
use App\Models\Modeltransaksibeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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

        $id_user = Auth::user()->id;
        // $namapengepul = Auth::user()->name;
        $response = DB::table('daftarpengepuls')->select('*')->where('id_user', $id_user)->get();
        $decoding = json_decode($response, True);
        foreach ($decoding as $dim) {
            $namapengepul = $dim['nama'];
        }

        // $namapetani = Auth::user()->name;
        // $response = DB::table('panen')->select('*')->where('id_penebas', $namapengepul)->get();
        $response = DB::table('daftarpengepuls')
            ->join('panens', 'id_penebas', '=', 'daftarpengepuls.nama')
            ->where('status', 'verify')
            ->where('daftarpengepuls.nama', $namapengepul)
            ->where('statusdaripengepul', 1)
            ->get();
        $data = json_decode($response, True);
        // return redirect('pages/myprofile');
        // return dd($data);
        return view('pages/pemprosesan', compact('data'));

        //     $id_user = Auth::user()->id;
        //     // $namapetani = Auth::user()->name;
        //     $response = DB::table('panens')->select('*')->where('id_user', $id_user)->where('statusverifikasi', 1)->get();
        //     $data = json_decode($response, True);

        //     // return redirect('pages/myprofile');
        //     // return dd($data);
        // 
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
        // $response = Modelpemprosessan::find($id);
        // $data = json_decode($response, True);

        $id_user = Auth::user()->id;

        $id_user = Auth::user()->id;
        // $namapengepul = Auth::user()->name;
        $response = DB::table('daftarpengepuls')->select('*')->where('id_user', $id_user)->get();
        $decoding = json_decode($response, True);
        foreach ($decoding as $dim) {
            $namapengepul = $dim['nama'];
        }

        // $namapetani = Auth::user()->name;
        // $response = DB::table('panen')->select('*')->where('id_penebas', $namapengepul)->get();
        $response = DB::table('daftarpengepuls')
            ->join('panens', 'id_penebas', '=', 'daftarpengepuls.nama')
            ->where('status', 'verify')
            ->where('daftarpengepuls.nama', $namapengepul)
            ->where('statusdaripengepul', 1)
            ->get();
        $data = json_decode($response, True);
        
        return view('/pages/updatepemrosesan', compact('data'));
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
        // $data = Modeltransaksibeli::find($id);
        $panen_tanggal = $request->input('tanggal');

        $panenhasil = $request->input('hasilproduksi');
        $stnpanenhasil = $request->input('stnpanenhasil');
        // panen kualitas a
        $panenkualitas_a = $request->input('panen_kualitas_a');
  
        $panenkualitas_b = $request->input('panen_kualitas_b');
 
        $panenkualitas_c = $request->input('panen_kualitas_c');
    
        // }
        $data = Modelpemprosessan::find($id);

        $data->update([
      
            'panen_kualitas_a' => $panenkualitas_a,
            'panen_kualitas_b' => $panenkualitas_b,
            'panen_kualitas_c' => $panenkualitas_c
        ]);
        
        return redirect('/pages/pemprosesan');

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