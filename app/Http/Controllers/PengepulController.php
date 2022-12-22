<?php

namespace App\Http\Controllers;

use App\Models\biodata;
use Illuminate\Http\Request;

class PengepulController extends Controller
{
    // tambah data pengepul
    public function insertdatapengepul(Request $request){
        dd($request->all());
        biodata::create($request->all());
    }
    
}
