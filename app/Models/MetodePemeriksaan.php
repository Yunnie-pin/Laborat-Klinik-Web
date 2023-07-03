<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePemeriksaan extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
