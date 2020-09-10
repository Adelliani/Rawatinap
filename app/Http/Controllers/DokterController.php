<?php

namespace App\Http\Controllers;

use App\DetailPF;
use Illuminate\Http\Request;
use App\Dokter;
use App\RawatInap;
use App\Pemeriksaan;
use App\Diagnosa;
use App\fasilitas;
use App\Obat;
use App\OrderObat;
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

        $pelayanan = $pemeriksaan->union($diagnosa)->union($fasilitas)->orderBy("tgl", "DESC")->orderBy("jam", "DESC")->get();
        return view('dokter.detail', ["rawat_inap" => $rawat_inap, "pelayanan" => $pelayanan]);
    }


    function simpanpemeriksaan(Request $request, RawatInap $rawat_inap)
    {
        $data_pemeriksaan = $request->only(['jam_pemeriksaan', 'tgl_pemeriksaan', 'jenis_pemeriksaan', 'hasil_pemeriksaan', 'id_rawatinap']);
        $pemeriksaan = new Pemeriksaan($data_pemeriksaan);
        $rawat_inap->pemeriksaan()->save($pemeriksaan);
        return redirect()->route("lihatdetailri", ['rawat_inap' => $rawat_inap->id_rawatinap]);
    }

    function simpanresepobat(Request $request, RawatInap $rawat_inap)
    {
        $data_obat = $request->only(["tgl_order", "jam_order", "jumlah_order", "tujuan"]);
        $data_obat["efek"] = "";
        $rawat_inap->obat()->attach($request->input("id_obat"), $data_obat);

        return redirect()->route("lihatdetailri", ['rawat_inap' => $rawat_inap->id_rawatinap]);
    }
    function simpanreturobat(Request $request)
    {
        return redirect()->route("detail");
    }

    function simpandiagnosa(Request $request, RawatInap $rawat_inap)
    {
        $data_diagnosa = $request->only(['jam_diagnosa', 'tgl_diagnosa', 'hasil_diagnosa', 'tinggi', 'berat', 'suhubadan']);
        $diagnosa = new Diagnosa($data_diagnosa);
        $rawat_inap->diagnosa()->save($diagnosa);
        return redirect()->route("lihatdetailri", ['rawat_inap' => $rawat_inap->id_rawatinap]);
    }

    function simpanfasilitas(Request $request, RawatInap $rawat_inap)
    {
        $data_detailpf = $request->only(['jam_pemakaian', 'tgl_pemakaian', 'alasan_pemakaian']);
        $rawat_inap->fasilitas()->attach($request->input("id_fasilitas"), $data_detailpf);

        return redirect()->route("lihatdetailri", ['rawat_inap' => $rawat_inap->id_rawatinap]);
    }
    function konfirmasidokter()
    {
        return redirect()->route("detail");
    }
}
