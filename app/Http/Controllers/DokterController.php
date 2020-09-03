<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use App\RawatInap;
use App\Pasien;

class DokterController extends Controller
{
    function tampil() {
        $pasiens = Pasien::all();
        $rawat_inaps = RawatInap::all();
        return view('dokter.index', [
            'pasiens' => $pasiens,
            'rawat_inaps' => $rawat_inaps,
        ]);
    }

    function lihatdetailri() {
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
