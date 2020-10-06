<?php

namespace App\Http\Controllers;

use App\Kamar;
use App\Pegawai;
use App\Perawat;
use App\RawatInap;
use Auth;
use Carbon\Carbon;
use Doctrine\DBAL\Query\QueryBuilder;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function __invoke()
    {
        $id_poli = Auth::user()->poli->id_poli;

        $current_time = Carbon::now()->format("H:i:s");
        $current_shift = Auth::user()->poli->shift()->where(function ($query) use ($current_time) {
            $query->whereRaw("jam_masuk < jam_keluar");
            $query->whereTime("jam_masuk", "<=", $current_time);
            $query->whereTime("jam_keluar", ">=", $current_time);
        })->orWhere(function ($query) use ($current_time) {
            $query->whereRaw("jam_masuk > jam_keluar");
            $query->whereTime("jam_masuk", ">=", $current_time);
            $query->whereTime("jam_keluar", "<=", $current_time);
        })->first();

        $pegawais = $current_shift->pegawai;
        $perawats = $current_shift->perawat;

        $count_pasien = RawatInap::where("id_poli", $id_poli)->whereNull("tgl_keluar")->count();

        $kamar = Kamar::wherePoli($id_poli);
        $count_ruangan = $kamar->count();
        $count_ruangan_tersedia = $kamar->whereColumn("kasur_terisi", "<", "jumlah_kasur")->count();

        return view('admin.index', [
            'pegawais' => $pegawais,
            'perawats'  => $perawats,
            'count_pasien' => $count_pasien,
            "count_ruangan" => $count_ruangan,
            "count_ruangan_tersedia" => $count_ruangan_tersedia
        ]);
    }
}
