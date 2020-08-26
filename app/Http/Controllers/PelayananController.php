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
        error_log("Kamar ".$rawat_inaps[0]->kamars);
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

        $waktu_sekarang = Carbon::now();
        $tanggal_sekarang = $waktu_sekarang->toDateString();
        $jam_sekarang = $waktu_sekarang->toTimeString();

        $data_pasien = $request->only(['no_identitas', 'nama_pasien', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir', 'status_perkawinan', 'gol_darah', 'agama', 'pendidikan', 'pekerjaan', 'alergi', 'alamat', 'no_hp', 'no_kk', 'nama_keluarga', 'hubungan', 'id_desa']);
        $pasien = Pasien::firstOrNew(["no_identitas" => $data_pasien["no_identitas"]], $data_pasien);
        $pasien->save();
        error_log("ID Pasien" . $pasien->id_pasien);
        error_log("ID DOkter" . $request->input("id_dokter"));

        $data_rawat_inap = $request->only(['tgl_masuk', 'jenis_pasien', 'no_bpjs', 'nama_pesertabpjs', 'prosedur_masuk', 'cara_masuk', 'perujuk', 'asal_rujukan', 'alasan_dirujuk', 'id_dokter']);
        $data_rawat_inap["id_pasien"] = $pasien->id_pasien;
        $rawat_inap = RawatInap::create($data_rawat_inap);

        error_log("ID Pasien" . $rawat_inap->id_rawatinap);

        $data_diagnosa = $request->only(['tinggi', 'berat', 'suhubadan', 'hasil_diagnosa']);
        $data_diagnosa["id_rawatinap"] = $rawat_inap->id_rawatinap;
        $data_diagnosa["tgl_diagnosa"] = $tanggal_sekarang;
        $data_diagnosa["jam_diagnosa"] = $jam_sekarang;
        $diagnosa = Diagnosa::create($data_diagnosa);

        $data_detail_pk = $request->only(['no_tempattidur',"id_kamar"]);
        $data_detail_pk = array_merge($data_detail_pk, ["id_rawatinap" => $rawat_inap->id_rawatinap, "tgl_masuk" => $tanggal_sekarang]);
        $detail_pk = DetailPK::create($data_detail_pk);

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
