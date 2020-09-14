<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    public $timestamps=false;
    protected $guarded=[];
    protected $primaryKey = 'id_gedung';

    public function ruangan(){
        return $this->hasMany('App\Ruang','id_gedung', 'id_gedung');
    }
}
