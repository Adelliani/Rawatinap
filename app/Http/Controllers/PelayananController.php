<?php

namespace App\Http\Controllers;

use App\DetailPK;
use Illuminate\Http\Request;
use App\RawatInap;
use App\Kamar;
use App\Pasien;
use App\Diagnosa;
use Carbon\Carbon;

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

    function simpan(Request $request)
    {

        $waktu_sekarang = Carbon::now();
        $tanggal_sekarang = $waktu_sekarang->toDateString();
        $jam_sekarang = $waktu_sekarang->toTimeString();

        $data_pasien = $request->only(['no_identitas', 'nama_pasien', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir', 'status_perkawinan', 'gol_darah', 'agama', 'pendidikan', 'pekerjaan', 'alergi', 'alamat', 'no_hp', 'no_kk', 'nama_keluarga', 'hubungan', 'id_desa']);
        $pasien = Pasien::firstOrNew(["no_identitas" => $data_pasien["no_identitas"]], $data_pasien);
        $pasien->save();

        $data_rawat_inap = $request->only(['tgl_masuk', 'jenis_pasien', 'no_bpjs', 'nama_pesertabpjs', 'prosedur_masuk', 'cara_masuk', 'perujuk', 'asal_rujukan', 'alasan_dirujuk', 'id_dokter', 'dokter_rs']);
        $rawat_inap = new RawatInap($data_rawat_inap);

        $pasien->rawatinap()->save($rawat_inap);

        $data_diagnosa = $request->only(['tinggi', 'berat', 'suhubadan', 'hasil_diagnosa']);
        $data_diagnosa["tgl_diagnosa"] = $tanggal_sekarang;
        $data_diagnosa["jam_diagnosa"] = $jam_sekarang;
        $diagnosa = new Diagnosa($data_diagnosa);
        $rawat_inap->diagnosa()->save($diagnosa);

        $data_detail_pk = $request->only(['no_tempattidur']);
        $data_detail_pk["tgl_masuk"] = $tanggal_sekarang;
        $rawat_inap->kamars()->attach($request->input("id_kamar"), $data_detail_pk);

        return redirect()->route("tampilpelayanan");
    }

    function konfirmasi()
    {
        return redirect()->route("index");
    }

    function lihatriwayat()
    {
        $rawat_inaps = RawatInap::all();
        return view('pelayanan.riwayat.index', [
            'rawat_inaps' => $rawat_inaps
        ]);
    }

    function lihatdetailriwayat(RawatInap $rawat_inap)
    {
        return view('pelayanan.riwayat.detail.index', ["rawat_inap" => $rawat_inap]);
    }

    function tampilpemeriksaan()
    {
        return view('pelayanan.riwayat.detail.pemeriksaan', []);
    }
    function tampilresepobat()
    {
        return view('pelayanan.riwayat.detail.resepobat', []);
    }
    function tampildiagnosa()
    {
        return view('pelayanan.riwayat.detail.diagnosa', []);
    }
    function tampilfasilitas()
    {
        return view('pelayanan.riwayat.detail.fasilitas', []);
    }
}
