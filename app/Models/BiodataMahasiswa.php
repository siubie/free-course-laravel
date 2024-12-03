<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataMahasiswa extends Model
{
    /** @use HasFactory<\Database\Factories\BiodataMahasiswaFactory> */
    use HasFactory;
    //add fillables
    protected $fillable = [
        'nim',
        'nama',
        'alamat',
        'jurusan',
        'nomor_telepon',
    ];
}
