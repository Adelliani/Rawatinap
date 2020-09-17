<?php

namespace App\Http\Controllers;

use App\RawatInap;
use Carbon\Carbon;
use Illuminate\Http\Request;



class AdminLaporanController extends Controller
{
    public function __invoke(Request $request)
    {



        if ($request->query("tanggal")) {
            $tanggal = $request->input("tanggal");
            $jarak = explode(" - ", $tanggal);

            $jarak[0] .= " 00:00:00";
            $jarak[1] .= " 23:59:59";

            $date_start = new Carbon($jarak[0], "WIB");
            $date_end = new Carbon($jarak[1], "WIB");



            $rawat_inap = RawatInap::whereBetween("tgl_keluar", [$date_start, $date_end])->get();
        } else {
            $rawat_inap = RawatInap::whereDate("tgl_keluar", Carbon::now())->get();
        }


        return view("admin.laporan.index", ["rawat_inaps" => $rawat_inap]);
    }
}
