<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    public $timestamps=false;
    protected $guarded=[];
    
    public function kabupaten()
    {
        return $this->belongsTo('App\Kabupaten','id_kabupaten');
    }
}
