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

    public static function boot()
    {
        parent::boot();
        static::created(function ($data) {

            $username = lcfirst(join("", explode(" ", ucwords($data->nama_poli))));
            $password = "0123456789";

            $data_user = [
                "username" => $username,
                "password" => $password,
                "jenis_user" => 2
            ];

            $data->akun()->create($data_user);
        });
    }

    public function akun()
    {
        return $this->hasOne("App\User", "id_user", "id_user");
    }
}
