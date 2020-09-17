<?php

namespace App\Http\Controllers;

use App\Kamar;
use App\RawatInap;
use Illuminate\Http\Request;

class PelayananHomeController extends Controller
{
    public function __invoke()
    {
        $kamars = Kamar::wherePoli(1)->whereColumn("kasur_terisi","<","jumlah_kasur")->get();
        
        $rawat_inaps = RawatInap::all();
        return view('pelayanan.main.index', [
            'kamars' => $kamars,
            'rawat_inaps' => $rawat_inaps
        ]);
    }
}
