<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPK extends Model
{
    public function rawatinap()
    {
        return $this->belongsTo('App\RawatInap','id_rawatinap','id_rawatinap');
        
    }
}
