<?php

namespace App\Http\Controllers;

use App\Kamar;
use App\RawatInap;
use Illuminate\Http\Request;

class PelayananHomeController extends Controller
{
    public function __invoke()
    {
        $kamars = Kamar::all();
        $rawat_inaps = RawatInap::all();
        return view('pelayanan.main.index', [
            'kamars' => $kamars,
            'rawat_inaps' => $rawat_inaps
        ]);
    }
}
