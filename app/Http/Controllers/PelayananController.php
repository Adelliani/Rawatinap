<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RawatInap;
use App\Kamar;
use App\Pasien;
use App\Diagnosa;

class PelayananController extends Controller
{
    function tampil()
    {
        $kamars = Kamar::all();
        $rawat_inaps = RawatInap::all();
        return view('pelayanan.index.index', [
            'kamars' => $kamars,
            'rawat_inaps' => $rawat_inaps
        ]);
    }

    function lihat()
    {
        return view('pelayanan/riwayat', []);
    }


    function simpan(Request $request)
    {
        $data_pasien = $request->only([/* nama kolom pasien */]);
        $pasien = Pasien::create($data_pasien);
        return redirect()->route("tampilpelayanan");
    }

    function konfirmasi()
    {
        return redirect()->route("index");
    }

    function tampilpemeriksaan()
    {
        return view('pelayanan/pemeriksaan/index', []);
    }
    function tampilresepobat()
    {
        return view('pelayanan/resepobat/index', []);
    }
    function tampildiagnosa()
    {
        return view('pelayanan/diagnosa/index', []);
    }
    function tampilfasilitas()
    {
        return view('pelayanan/fasilitas/index', []);
    }
}
