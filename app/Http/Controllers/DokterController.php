<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use App\RawatInap;

class DokterController extends Controller
{
    function tampil() {
        $rawat_inaps = RawatInap::all();
        return view('dokter.index', [
            'rawat_inaps' => $rawat_inaps,
        ]);
    }

    function lihat(RawatInap $rawat_inap)
    {
        return view('dokter.detail', ["rawat_inap" => $rawat_inap]);
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
