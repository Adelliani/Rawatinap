<?php

namespace App\Http\Controllers;

use App\RawatInap;
use DB;
use Illuminate\Http\Request;

class DokterPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rawat_inap = RawatInap::belumSelesai()->get();

        return view("dokter.index", ["rawat_inaps" => $rawat_inap]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RawatInap  $rawatInap
     * @return \Illuminate\Http\Response
     */
    public function show(RawatInap $rawatInap)
    {

        if ($rawatInap->waktu_keluar) {
            return abort(404);
        } else {

            $pemeriksaan = $rawatInap->pemeriksaan()->select("waktu_pemeriksaan AS waktu", DB::raw("'Pemeriksaan' as jenis"));
            $diagnosa = $rawatInap->diagnosa()->select("waktu_diagnosa AS waktu", DB::raw("'Diagnosa' as jenis"));
            $fasilitas = $rawatInap->fasilitas()->select("detail_p_f_s.tgl_pemakaian AS waktu",  DB::raw("'Fasilitas' as jenis"));

            $pelayanan = $pemeriksaan->union($diagnosa)->union($fasilitas)->orderBy("waktu", "DESC")->get();
            return view("dokter.show", ["rawat_inap" => $rawatInap, "pelayanan" => $pelayanan]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RawatInap  $rawatInap
     * @return \Illuminate\Http\Response
     */
    public function edit(RawatInap $rawatInap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RawatInap  $rawatInap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RawatInap $rawatInap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RawatInap  $rawatInap
     * @return \Illuminate\Http\Response
     */
    public function destroy(RawatInap $rawatInap)
    {
        //
    }
}
