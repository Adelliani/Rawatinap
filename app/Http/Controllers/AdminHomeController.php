<?php

namespace App\Http\Controllers;

use App\Kamar;
use App\Pegawai;
use App\Perawat;
use App\RawatInap;
use Auth;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function __invoke()
    {
        $id_poli = Auth::user()->poli->id_poli;

        $pegawais = Pegawai::where("id_poli", $id_poli);
        $perawats = Perawat::where("id_poli", $id_poli);

        $count_pasien = RawatInap::where("id_poli", $id_poli)->whereNull("tgl_keluar")->count();

        $count_ruangan = Kamar::wherePoli($id_poli)->count();
        $count_ruangan_tersedia = Kamar::wherePoli($id_poli)->whereColumn("kasur_terisi", "<", "jumlah_kasur")->count();

        return view('admin.index', [
            'pegawais' => $pegawais,
            'perawats'  => $perawats,
            'count_pasien' => $count_pasien,
            "count_ruangan" => $count_ruangan,
            "count_ruangan_tersedia" => $count_ruangan_tersedia
        ]);
    }
}
