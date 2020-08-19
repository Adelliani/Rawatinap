<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use App\Shift;

class AdminController extends Controller
{
    function tampil() {
        return view('admin/datadokter/index',[
        ]);
    }
}
