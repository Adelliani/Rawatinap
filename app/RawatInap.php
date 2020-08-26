<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RawatInap extends Model
{
    public $timestamps=false;
    protected $guarded=[];
    
    public function pasien()
    {
        return $this->belongsTo('App\Pasien','id_pasien','id_pasien');
    }
    public function detailpk()
    {
        return $this->hasMany('App\DetailPK','id_pk','id_pk');
    }
}
