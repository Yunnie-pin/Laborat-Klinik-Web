<?php

namespace App\Models;

use App\Models\BidangPemeriksaan;
use App\Models\MetodePemeriksaan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ParameterPemeriksaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'bidang_id',
        'parameter',
        'nilai_rujukan',
        'metode_id',
        'satuan',
        'harga'
    ];

    public function bidang(){
        return $this->hasOne(BidangPemeriksaan::class,'id','bidang_id');
    }

    public function metode(){
        return $this->hasOne(MetodePemeriksaan::class,'id','bidang_id');
    }

}
