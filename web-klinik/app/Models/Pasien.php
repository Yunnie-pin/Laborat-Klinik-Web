<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'jenis_identitas',
        'jenis_kelamin',
        'no_identitas',
        'no_telp',
        'bpjs',
        'alamat'
    ];
}