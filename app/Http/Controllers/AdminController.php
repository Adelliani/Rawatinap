<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use App\Shift;

class AdminController extends Controller
{
    function tampildataruangan() {
        return view('admin/dataruangan/index',[
        ]);
    }
    function tampildatagedung() {
        return view('admin/dataruangan/datagedung/index',[
        ]);
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
