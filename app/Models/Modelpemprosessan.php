<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelpemprosessan extends Model
{
    use HasFactory;
    protected $table = 'panens';
    protected $fillable = [
        "id",
        "id_user",
        "namapetani",
        "id_lokasisawah",
        "ks_waktu_tanam",
        "panen_tanggal",
        "panen_jumlah",
        "id_penebas",
        "panen_harga",
        "panen_kualitas_a",
        "panen_kualitas_b",
        "panen_kualitas_c",
        "status",
        "statusdaripengepul",
    ];
}
