<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DetailPK extends Pivot
{

    protected $primaryKey = 'id_pk';
    public $timestamps = false;
    protected $guarded = [];
    public $incrementing = true;

    public static function boot()
    {
        parent::boot();
        static::created(function ($data) {
            $data->kamar->kasur_terisi++;
            $data->kamar->save();
        });
        static::updating(function ($data) {
            if (($data->getOriginal("tgl_keluar") == null) && ($data->tgl_keluar != null)) {
                $data->kamar->kasur_terisi--;
                $data->kamar->save();
            }
        });
    }

    public function kamar()
    {
        return $this->belongsTo("App\Kamar", "id_kamar", "id_kamar");
    }
}
