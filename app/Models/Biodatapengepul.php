<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodatapengepul extends Model
{
    use HasFactory;
    protected $table = 'biodatapengepuls';
    protected $fillable = [
        'nama',
        'alamat',
        'nohp',
        'noktp',
        'kabupaten'
    ];
}
