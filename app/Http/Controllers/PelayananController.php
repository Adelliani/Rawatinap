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
        $data_pasien = $request->only(['no_identitas','nama_pasien','jenis_kelamin','tempat_lahir','tgl_lahir','status_perkawinan','gol_darah','agama','pendidikan','pekerjaan','alergi','alamat','no_hp','no_kk','nama_keluarga','hubungan','id_desa']);
        $rawat_inap = $request->only(['tgl_masuk','jenis_pasien','no_bpjs','nama_pesertabpjs','prosedur_masuk','cara_masuk','perujuk','asal_rujukan','alasan_dirujuk']);
        $diagnosa = $request->only(['tinggi','berat','suhubadan','hasil_diagnosa']);
        $dokter = $request->only(['nama_dokter']);
        $detail_pk = $request->only(['no_tempattidur']);
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
