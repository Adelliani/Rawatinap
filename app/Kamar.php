<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'id_kamar';

    public function ruang()
    {
        return $this->belongsTo('App\Ruang', 'id_ruang', 'id_ruang');
    }

    public function rawatinap(){
        return $this->belongsToMany("App\Kamar","detail_p_k_s","id_rawatinap","id_kamar","id_rawatinap","id_kamar")->using('App\DetailPK')->withPivot(["tgl_masuk","tgl_keluar","no_tempattidur"]);
    }
}
