<?php

namespace App\Http\Controllers;

use App\Kamar;
use App\Pegawai;
use App\Perawat;
use App\RawatInap;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function __invoke()
    {
        $pegawais = Pegawai::all();
        $perawats = Perawat::all();

        $count_pasien = RawatInap::whereNull("tgl_keluar")->count();

        $count_ruangan = Kamar::count();
        $count_ruangan_tersedia = Kamar::whereColumn("kasur_terisi", "<", "jumlah_kasur")->count();

        return view('admin.index', [
            'pegawais' => $pegawais,
            'perawats'  => $perawats,
            'count_pasien' => $count_pasien,
            "count_ruangan" => $count_ruangan,
            "count_ruangan_tersedia" => $count_ruangan_tersedia
        ]);
    }
}
