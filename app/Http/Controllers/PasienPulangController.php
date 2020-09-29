<?php

namespace App\Http\Controllers;

use App\RawatInap;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PasienPulangController extends Controller
{
    public function __invoke(Request $request, RawatInap $rawatInap)
    {
        if (($rawatInap->tgl_keluar == null) && (!$rawatInap->siap_pulang)) {
            return abort(404);
        } else {
            $rawatInap->tgl_keluar = Carbon::now();
            $rawatInap->save();
            return back();
        }
    }
}
