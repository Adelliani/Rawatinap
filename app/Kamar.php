<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    public $timestamps=false;

    
    public function ruang()
    {
        return $this->belongsTo('App\Ruang','id_ruang','id_ruang');
    }    

}
