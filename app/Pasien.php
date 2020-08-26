<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public $timestamps=false;
    protected $guarded=[];
    
    public function rawatinap()
    {
        return $this->hasMany('App\RawatInap','id_rawatinap','id_rawatinap');
    }
}
