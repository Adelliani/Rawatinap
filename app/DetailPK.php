<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPK extends Model
{

    protected $primaryKey = 'id_pk';
    public $timestamps = false;
    protected $guarded = [];


    public function kamar()
    {
        return $this->belongsTo("App\Kamar", "id_kamar", "id_kamar");
    }

    protected static function booted()
    {
        static::created(function (DetailPK $pemakaian_kamar) {
            $kamar = $pemakaian_kamar->kamar();
            $kamar->kasur_terisi = $kamar->kasur_terisi + 1;
            $kamar->save();
        });

        static::updated(function (DetailPK $pemakaian_kamar) {
            $kamar = $pemakaian_kamar->kamar();
            $kamar->kasur_terisi = $kamar->kasur_terisi - 1;
            $kamar->save();
        });
    }
}
