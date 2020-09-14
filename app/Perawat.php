<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perawat extends Model
{
    public $timestamps=false;
    protected $guarded=[];
    protected $primaryKey = 'id_perawat';

    public function shift()
    {
        return $this->belongsTo('App\Shift', 'id_shift', 'id_shift');
    }
}
