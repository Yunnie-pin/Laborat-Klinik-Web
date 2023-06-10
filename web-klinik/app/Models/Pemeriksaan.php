<?php

namespace App\Models;

use App\Models\Pasien;
use App\Models\Status;
use App\Models\Keterangan;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemeriksaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'pasien_id',
        'status_id',
    ];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }

    public function pasiens(){
        return $this->hasOne(Pasien::class,'id','pasien_id');
    }

    public function keterangan(){
        return $this->hasMany(Keterangan::class,'pemeriksaan_id','id'); 
    }

    public function status(){
        return $this->hasOne(Status::class,'id','status_id');
    }


}
