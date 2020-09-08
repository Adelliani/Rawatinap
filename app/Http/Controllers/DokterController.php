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
        $pemeriksaan=new Pemeriksaan;
        $pemeriksaan->tgl_pemeriksaan=$request->tgl_pemeriksaan;
        $pemeriksaan->jam_pemeriksaan=$request->jam_pemeriksaan;
        $pemeriksaan->jenis_pemeriksaan=$request->jenis_pemeriksaan;
        $pemeriksaan->hasil_pemeriksaan=$request->hasil_pemeriksaan;
        $pemeriksaan->id_rawatinap=2;

        $pemeriksaan->save();
        return redirect()->route("tampilhasilpemeriksaan");
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
