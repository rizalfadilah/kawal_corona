<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus2 extends Model
{
    use HasFactory;
    protected $table='kasus2s';
    public function rw()
    {
        return $this->belongsTo(Rw::class,'id_rw');
        
    }

    public function tracking()
    {
        return $this->hasMany('App\Models\Kasus2','id_kasus2');
    }
}