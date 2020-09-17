<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    public $primaryKey = "id_poli";
    public $timestamps=false;
    protected $guarded=[];
}
