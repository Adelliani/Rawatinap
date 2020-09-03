<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public $timestamps=false;
    protected $guarded=[];

    public function shift()
    {
        return $this->belongsTo('App\Shift', 'id_shift', 'id_shift');
    }
}
