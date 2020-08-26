<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    public $timestamps=false;
    protected $guarded=[];

    public function kamar()
    {
        return $this->hasMany('App\Kamar','id_ruang', "id_ruang");
    }
    public function gedung()
    {
        return $this->belongsTo('App\Gedung','id_gedung','id_gedung');
    } 
}
