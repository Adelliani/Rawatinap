<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use App\RawatInap;
use App\Pemeriksaan;
use App\Diagnosa;
use App\fasilitas;
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
        $data_obat = $request->only(['nama_obat']);
        $data_obat = new Obat($data_obat);
        $rawat_inap->obat()->save($obat);

        $data_orderobat = $request->only(['tgl_order', 'jam_order','tujuan_obat','jumlah_obat']);
        $data_orderobat = new OrderObat($data_orderobat);
        $rawat_inap->orderobat()->save($orderobat);

        return redirect()->route("lihatdetailri", ['rawat_inap' => $rawat_inap->id_rawatinap]);
    }
    function simpanreturobat()
    {
        return redirect()->route("detail");
    }

    function simpandiagnosa(Request $request, RawatInap $rawat_inap)
    {
        $data_diagnosa = $request->only(['jam_diagnosa', 'tgl_diagnosa', 'hasil_diagnosa', 'tinggi', 'berat', 'suhubadan', 'id_rawatinap']);
        $diagnosa = new Diagnosa($data_diagnosa);
        $rawat_inap->diagnosa()->save($diagnosa);
        return redirect()->route("lihatdetailri", ['rawat_inap' => $rawat_inap->id_rawatinap]);
    }
    
    function simpanfasilitas(Request $request, RawatInap $rawat_inap)
    {
        $data_fasilitas = $request->only(['nama_fasilitas', 'jenis_fasilitas', 'id_poli']);
        $fasilitas = new Fasilitas($data_fasilitas);
        $rawat_inap->fasilitas()->save($fasilitas);

        $data_detailpf = $request->only(['jam_pemakaian', 'tgl_pemakaian', 'alasan_pemakaian']);
        $detail_pf = new DetailPF ($data_detailpf);
        $rawat_inap->detail_pf()->save($detail_pf);

        return redirect()->route("lihatdetailri", ['rawat_inap' => $rawat_inap->id_rawatinap]);
    }
    function konfirmasidokter()
    {
        return redirect()->route("detail");
    }
}
