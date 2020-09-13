<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\Perawat;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function __invoke()
    {
        $pegawais = Pegawai::all();
        $perawats = Perawat::all();
        return view('admin.index',[
            'pegawais' => $pegawais,
            'perawats'  => $perawats,
        ]);
    }
}
