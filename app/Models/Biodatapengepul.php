<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodatapengepul extends Model
{
    use HasFactory;
    protected $table = 'daftarpengepuls';

    protected $fillable = [
        //if id is not autoincrement then add 'id'
        'id_user',
        'alamat',
        'kabupaten',
        'nohp',
        'noktp',
        'nama'
    ];

}
