<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RawatInap;
use App\Kamar;
use App\Pasien;
use App\Diagnosa;

class PelayananController extends Controller
{
    function tampil() {
        $kamars = Kamar::all();
        $rawat_inaps = RawatInap::all();
        return view('pelayanan/index',[
        'kamars'=>$kamars,
        'rawat_inaps'=>$rawat_inaps
        ]);
    }

    function lihat() {
        return view('pelayanan/riwayat',[
        ]);
    }


    function simpan(Request $request) {
        $tgl_lhr = date("Y-m-d");
        $tgl_lhr  =$request->tgllahir;

        $pasien=new Pasien;
        $pasien->noidentitas=$request->noidentitas;
        $pasien->namapasien=$request->namapasien;
        $pasien->tempatlahir=$request->tempatlahir;
        $pasien->tgllahir=$tgl_lhr;
        $pasien->jeniskelamin=$request->jeniskelamin;
        $pasien->agama=$request->agama;
        $pasien->statusperkawinan=$request->statusperkawinan;
        $pasien->goldarah=$request->goldarah;
        $pasien->pendidikan=$request->pendidikan;
        $pasien->pekerjaan=$request->pekerjaan;
        $pasien->alergi=$request->alergi;
        $pasien->alamat=$request->alamat;
        $pasien->nohp=$request->nohp;
        $pasien->nokk=$request->nokk;
        $pasien->namakeluarga=$request->namakeluarga;
        $pasien->hubungan=$request->hubungan;
        $pasien->id_desa=$request->desa;   
        

        $pasien->save();
        return redirect()->route("index");
    }

    function konfirmasi() {
        return redirect()->route("index");
    }

    function tampilpemeriksaan() {
        return view('pelayanan/pemeriksaan/index',[
        ]);
    }
    function tampilresepobat() {
        return view('pelayanan/resepobat/index',[
        ]);
    }
    function tampildiagnosa() {
        return view('pelayanan/diagnosa/index',[
        ]);
    }
    function tampilfasilitas() {
        return view('pelayanan/fasilitas/index',[
        ]);
    }
}



