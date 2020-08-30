<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPK extends Model
{

    protected $primaryKey = 'id_pk';
    public $timestamps = false;
    protected $guarded = [];

}
