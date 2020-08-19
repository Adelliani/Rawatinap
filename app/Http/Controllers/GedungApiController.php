<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gedung;
use App\Poli;
use App\Kamar;
use App\Ruang;

class GedungApiController extends Controller
{
    function getPoli(Request $request)
    {
        if ($request->has("term")) {
            $poli = Poli::where("nama_poli", "like", "%" . $request->input("term") . "%")->get();
        } else {
            $poli = Poli::all();
        }
        return response()->json($poli);
    }
    function getGedung(Request $request)
    {
        if ($request->has("term")) {
            $gedung = Gedung::where("nama_gedung", "like", "%" . $request->input("term") . "%")->where("id_poli", $request->input("poli"))->get();
        } else {
            $gedung = Gedung::where("id_poli", $request->input("poli"))->get();
        }
        return response()->json($gedung);
    }
    function getRuangan(Request $request)
    {
        if ($request->has("term")) {
            $ruang = Ruang::where("nama_ruang", "like", "%" . $request->input("term") . "%")->where("id_gedung", $request->input("gedung"))->get();
        } else {
            $ruang = Ruang::where("id_gedung", $request->input("gedung"))->get();
        }
        return response()->json($ruang);
    }
    function getKamar(Request $request)
    {
        if ($request->has("term")) {
            $kamar = Kamar::where("nama_kamar", "like", "%" . $request->input("term") . "%")->where("id_ruang", $request->input("ruang"))->get();
        } else {
            $kamar = Kamar::where("id_ruang", $request->input("ruang"))->get();
        }
        return response()->json($kamar);
    }
}
