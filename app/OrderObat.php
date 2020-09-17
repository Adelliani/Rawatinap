<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderObat extends Model
{
    public $timestamps=false;
    protected $guarded=[];
    protected $primaryKey = 'id_order';

    public function returobat()
    {
        return $this->hasOne("App\PengembalianObat", "id_order", "id_order");
    }
}
