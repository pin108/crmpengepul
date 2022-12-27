<?php

namespace App\Http\Controllers;

use App\Models\Modeltransaksibeli;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class transaksibeli extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
            ->where('daftarpengepuls.nama', $namapengepul)

            ->where('status', 'verify')
            ->get();
        $data = json_decode($response, True);
        // return redirect('pages/myprofile');
        // return dd($data);
        return view('pages/transaksibeli', compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $namapetani = $request->input('namapetani');
        $lokasi = $request->input('lokasi');
        $id_user = Auth::user()->id;
        $kabupaten = $request->input('kabupaten');
        $tafsiranpanen = $request->input('tafsiranpanen');
        $statusverifikasi = $request->input('statusverifikasi');
        $tanggal = $request->input('tanggal');
        $jumlahhasil = $request->input('jumlahhasil');
        // $nama = $request->input('nama');
        // $nama = $request->input('nama');
        // $currentuserid = Auth::id();
        Modeltransaksibeli::create([
            // 'id_user' => $currentuserid,
            'namapetani' => $namapetani,
            'lokasi' => $lokasi,
            'kabupaten' => $kabupaten,
            'id_user' => $id_user,
            'tafsiranpanen' => $tafsiranpanen,
            'tanggal' => $tanggal,
            'statusverifikasi' => $statusverifikasi,
            'jumlahhasil' => $jumlahhasil
        ]);

        return redirect('pages/transaksibeli')->with('status', 'Pembelian Berhasil Ditambah');
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
    public function updateverifikasi(Request $request, $id)
    {
        $statusverifikasi = "1";
        $findid = DB::table('panens')
            ->where('id', $id)
            ->update(['statusdaripengepul' => $statusverifikasi]);

        // $findid = Modeltransaksibeli::find($id);
        // $findid->update([
        //     // 'id_user' => $currentuserid,
        //     // 'id_lokasisawah' => $datalokasi,
        //     'statusverifikasi' => $statusverifikasi
        // ]);
        return redirect('/pages/transaksibeli')->with('data berhasil terverifikasi');
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