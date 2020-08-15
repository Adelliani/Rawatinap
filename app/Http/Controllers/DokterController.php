<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use App\Pasien;

class DokterController extends Controller
{
    function tampil() {
        return view('dokter/index',[
        ]);
    }

    function lihat() {
        return view('dokter/detail',[
        ]);
    }
    function simpantindakan() {
        return redirect()->route("detail");
    }
    function simpanresepobat() {
        return redirect()->route("detail");
    }
    function simpanreturobat() {
        return redirect()->route("detail");
    }
    function simpanpermintaanpelayanan() {
        return redirect()->route("detail");
    }
    function konfirmasidokter() {
        return redirect()->route("detail");
    }
}
