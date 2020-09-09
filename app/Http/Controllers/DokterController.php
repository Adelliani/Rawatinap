<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use App\RawatInap;
use App\Pemeriksaan;


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
    
    function tambah_pemeriksaan() {
        $pemeriksaans = Pemeriksaan::all();
        return view('dokter.detail', [
            'pemeriksaans' => $pemeriksaans,
        ]);
    }
    function simpanpemeriksaan(Request $request) {
        $data_pemeriksaan = $request->only(['jam_pemeriksaan','tgl_pemeriksaan','jenis_pemeriksaan', 'hasil_pemeriksaan', 'id_rawatinap']);
        $pemeriksaan = new Pemeriksaan($data_pemeriksaan);
        $rawat_inap->pemeriksaan()->save($pemeriksaan);
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
