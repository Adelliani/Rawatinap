<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use App\Shift;
use App\Gedung;

class AdminController extends Controller
{
    function tampildataruangan() {
        return view('admin/dataruangan/index',[
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
        return view('admin/dataruangan/dataruang/index',[
        ]);
    }
    function tampildatakamar() {
        return view('admin/dataruangan/datakamar/index',[
        ]);
    }

    function tampildatadokter() {
        return view('admin/datadokter/index',[
        ]);
    }
    
    function tampildatapegawai() {
        return view('admin/datapegawai/index',[
        ]);
    }

    function tampildataperawat() {
        return view('admin/dataperawat/index',[
        ]);
    }

    function tampildatafasilitas() {
        return view('admin/datafasilitas/index',[
        ]);
    }

    function tampillaporan() {
        return view('admin/laporan/index',[
        ]);
    }
}
