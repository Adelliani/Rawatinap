<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    public $timestamps=false;
    protected $guarded=[];

    public function rawatinap()
    {
        return $this->hasMany('App\RawatInap','id_dokter','id_dokter');
    }
}

