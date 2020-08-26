<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function kecamatan()
    {
        return $this->belongsTo('App\Kecamatan', 'id_kecamatan');
    }
}
