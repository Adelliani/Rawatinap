<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public $timestamps=false;
    protected $guarded=[];

    protected $primaryKey = 'id_pasien';
    
    public function rawatinap()
    {
        return $this->hasMany('App\RawatInap','id_pasien','id_pasien');
    }
}
