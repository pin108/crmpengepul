<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modeltransaksibeli extends Model
{
    use HasFactory;
    protected $table = 'panens';
    protected $fillable = [
        //if id is not autoincrement then add 'id'
        'id',
        'id_user',
        'namapetani',
        'id_lokasisawah',
        'ks_waktu_tanam',
        'panen_tanggal',
        'panen_jumlah',
        'id_penebas',
        'panen_harga',
        'statusdaripengepul',
        'status'

    ];
}