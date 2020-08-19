<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use App\Shift;

class AdminController extends Controller
{
    function tampildatadokter() {
        return view('admin/datadokter/index',[
        ]);
    }
    function tampildataruangan() {
        return view('admin/dataruangan/index',[
        ]);
    }
}
