<?php

namespace App\Http\Controllers;

use App\Gedung;
use App\Kamar;
use App\Ruang;
use Illuminate\Http\Request;

class RuanganHomeController extends Controller
{
    public function __invoke()
    {
        $gedungs = Gedung::all();
        $ruangs = Ruang::all();
        $kamars = Kamar::all();
        return view('admin.ruangan.index',[
            'gedungs' => $gedungs,
            'ruangs'  => $ruangs,
            'kamars'  => $kamars,
        ]);
    }
}
