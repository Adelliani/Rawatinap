<?php

namespace App;

use Carbon\Carbon;
use Hash;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    public $primaryKey = "id_poli";
    public $timestamps = false;
    protected $guarded = [];

 
    public function akun()
    {
        return $this->belongsTo("App\User", "id_user", "id_user");
    }
}
