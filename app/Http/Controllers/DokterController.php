<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use App\RawatInap;
use App\Pasien;
use App\Kamar;

class DokterController extends Controller
{
    function tampil() {
        $pasiens = Pasien::all();
        $rawat_inaps = RawatInap::all();
        $kamars = Kamar::all();
        return view('dokter.index', [
            'pasiens' => $pasiens,
            'rawat_inaps' => $rawat_inaps,
            'kamars' => $kamars,
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
