<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use App\RawatInap;
use App\Pemeriksaan;
use DB;

class DokterController extends Controller
{
    function tampil()
    {
        $rawat_inaps = RawatInap::all();
        return view('dokter.index', [
            'rawat_inaps' => $rawat_inaps,
        ]);
    }

    function lihat(RawatInap $rawat_inap)
    {

        $pemeriksaan = $rawat_inap->pemeriksaan()->select("tgl_pemeriksaan AS tgl", "jam_pemeriksaan AS jam", DB::raw("'Pemeriksaan' as jenis"));
        $diagnosa = $rawat_inap->diagnosa()->select("tgl_diagnosa AS tgl", "jam_diagnosa AS jam", DB::raw("'Diagnosa' as jenis"));
        $fasilitas = $rawat_inap->fasilitas()->select("tgl_pemakaian AS tgl", "jam_pemakaian AS jam", DB::raw("'Fasilitas' as jenis"));

        $pelayanan = $pemeriksaan->union($diagnosa)->union($fasilitas)->orderBy("tgl", "DESC")->orderBy("jam","DESC")->get();
        return view('dokter.detail', ["rawat_inap" => $rawat_inap, "pelayanan" => $pelayanan]);
    }


    function simpanpemeriksaan(Request $request, RawatInap $rawat_inap)
    {
        $data_pemeriksaan = $request->only(['jam_pemeriksaan', 'tgl_pemeriksaan', 'jenis_pemeriksaan', 'hasil_pemeriksaan', 'id_rawatinap']);
        $pemeriksaan = new Pemeriksaan($data_pemeriksaan);
        $rawat_inap->pemeriksaan()->save($pemeriksaan);
        return redirect()->route("lihatdetailri", ['rawat_inap' => $rawat_inap->id_rawatinap]);
    }

    function simpanresepobat()
    {
        return redirect()->route("detail");
    }
    function simpanreturobat()
    {
        return redirect()->route("detail");
    }
    function simpanpermintaanpelayanan()
    {
        return redirect()->route("detail");
    }
    function konfirmasidokter()
    {
        return redirect()->route("detail");
    }
}
