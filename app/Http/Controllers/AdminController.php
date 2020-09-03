<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use App\Pegawai;
use App\Perawat;
use App\Shift;
use App\Gedung;
use App\Ruang;
use App\Kamar;
use App\RawatInap;
use App\Pasien;
use App\Fasilitas;

class AdminController extends Controller
{
    function tampiladmin() {
        return view('admin/index',[
        ]);
    }

    function tampildataruangan() {
        $gedungs = Gedung::all();
        $ruangs = Ruang::all();
        $kamars = Kamar::all();
        return view('admin.dataruangan.index',[
            'gedungs' => $gedungs,
            'ruangs'  => $ruangs,
            'kamars'  => $kamars,
        ]);
    }
    
    function tampildatagedung() {
        $gedungs = Gedung::all();
        return view('admin.dataruangan.datagedung.index', [
            'gedungs' => $gedungs,
        ]);
    }

    function simpandatagedung(Request $request) {
        $gedung=new Gedung;
        $gedung->nama_gedung=$request->nama_gedung;
        $gedung->id_poli=1;

        $gedung->save();
        return redirect()->route("tampildatagedung");
    }
    function tampildataruang() {
        $ruangs = Ruang::all();
        return view('admin.dataruangan.dataruang.index',[
            'ruangs' => $ruangs,
        ]);
    }

    function simpandataruang(Request $request) {
        $ruang=new Ruang;
        $ruang->nama_ruang=$request->nama_ruang;
        $ruang->id_gedung=$request->id_gedung;

        $ruang->save();
        return redirect()->route("tampildataruang");
    }

    function tampildatakamar() {
        $kamars = Kamar::all();
        return view('admin.dataruangan.datakamar.index',[
            'kamars' => $kamars,
        ]);
    }

    function simpandatakamar(Request $request) {
        $kamar=new Kamar;
        $kamar->nama_kamar=$request->nama_kamar;
        $kamar->jumlah_kasur=$request->jumlah_kasur;
        $kamar->harga_kamar=$request->harga_kamar;
        $kamar->fasilitas=$request->fasilitas;
        $kamar->id_ruang=$request->id_ruang;
        $kamar->kelas=$request->kelas;

        $kamar->save();
        return redirect()->route("tampildatakamar");
    }

    function tampildatadokter() {
        $dokters = Dokter::all();
        return view('admin.datadokter.index',[
            'dokters' => $dokters,
        ]);
    }

    function simpandatadokter(Request $request) {
        $dokter=new Dokter;
        $dokter->nama_dokter=$request->nama_dokter;
        $dokter->jenis_kelamin=$request->jenis_kelamin;
        $dokter->jenis_dokter=$request->jenis_dokter;
        $dokter->spesialisasi=$request->spesialisasi;
        $dokter->notelp=$request->notelp;
        $dokter->alamat=$request->alamat;
        $dokter->id_poli=1;

        $dokter->save();
        return redirect()->route("tampildatadokter");
    }


    function tampildatapegawai() {
        $pegawais = Pegawai::all();
        return view('admin.datapegawai.index',[
            'pegawais' => $pegawais,
        ]);
    }
    function simpandatapegawai(Request $request) {
        $pegawai=new Pegawai;
        $pegawai->nama_pegawai=$request->nama_pegawai;
        $pegawai->jenis_kelamin=$request->jenis_kelamin;
        $pegawai->posisi=$request->posisi;
        $pegawai->notelp=$request->notelp;
        $pegawai->alamat=$request->alamat;
        $pegawai->id_poli=1;
        $pegawai->id_shift=1;

        $pegawai->save();
        return redirect()->route("tampildatapegawai");
    }

    function tampildataperawat() {
        $perawats = Perawat::all();
        return view('admin.dataperawat.index',[
            'perawats' => $perawats,
        ]);
    }
    function simpandataperawat(Request $request) {
        $perawat=new Perawat;
        $perawat->nama_perawat=$request->nama_perawat;
        $perawat->jenis_kelamin=$request->jenis_kelamin;
        $perawat->notelp=$request->notelp;
        $perawat->alamat=$request->alamat;
        $perawat->id_poli=1;
        $perawat->id_shift=1;

        $perawat->save();
        return redirect()->route("tampildataperawat");
    }


    function tampildatashift() {
        $shifts = Shift::all();
        return view('admin.datashift.index',[
            'shifts' => $shifts,
        ]);
    }
    function simpandatashift(Request $request) {
        $shift=new Shift;
        $shift->nama_shift=$request->nama_shift;
        $shift->jam_masuk=$request->jam_masuk;
        $shift->jam_keluar=$request->jam_keluar;
        $shift->id_poli=1;

        $shift->save();
        return redirect()->route("tampildatashift");
    }


    function tampildatafasilitas() {
        $fasilitas = Fasilitas::all();
        return view('admin.datafasilitas.index',[
            'fasilitas' => $fasilitas,
        ]);
    }

    function simpandatafasilitas(Request $request) {
        $fasilitas=new Fasilitas;
        $fasilitas->nama_fasilitas=$request->nama_fasilitas;
        $fasilitas->jenis_fasilitas=$request->jenis_fasilitas;
        $fasilitas->harga_fasilitas=$request->harga_fasilitas;
        $fasilitas->id_poli=1;

        $fasilitas->save();
        return redirect()->route("tampildatafasilitas");
    }

    function tampillaporan() {
        $rawat_inaps = RawatInap::all();
        $pasiens = Pasien::all();
        $kamars = Kamar::all();
        return view('admin.laporan.index',[
            'rawat_inaps' => $rawat_inaps,
            'pasiens'  => $pasiens,
            'kamars'  => $kamars,
        ]);
    }
}
