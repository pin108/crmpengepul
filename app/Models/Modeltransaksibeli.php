<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modeltransaksibeli extends Model
{
    use HasFactory;
    protected $table = 'tambahbelis';
    protected $fillable = [
        //if id is not autoincrement then add 'id'
        'id_user',
        'namapetani',
        'lokasi',
        'kabupaten',
        'tafsiranpanen',
        'kualitasA',
        'kualitasB',
        'kualitasC',
        'jumlahhasil',
        'tanggal'
    ];
}