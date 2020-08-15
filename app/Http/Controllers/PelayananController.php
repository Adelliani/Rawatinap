<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RawatInap;
use App\Kamar;

class PelayananController extends Controller
{
    function tampil() {
        $kamars = Kamar::all();
        $rawat_inaps = RawatInap::all();
        return view('pelayanan/index',[
        'kamars'=>$kamars,
        'rawat_inaps'=>$rawat_inaps
        ]);
    }

    function lihat() {
        return view('pelayanan/riwayat',[
        ]);
    }

    function simpan() {
        return redirect()->route("index");
    }

    function konfirmasi() {
        return redirect()->route("index");
    }
}
