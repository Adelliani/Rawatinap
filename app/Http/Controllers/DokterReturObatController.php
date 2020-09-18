<?php

namespace App\Http\Controllers;

use App\OrderObat;
use App\RawatInap;
use Illuminate\Http\Request;

class DokterReturObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, RawatInap $rawatInap, OrderObat $obat)
    {
        return view("dokter.obat.returobat", ["rawat_inap" => $rawatInap, "order_obat" => $obat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RawatInap $rawatInap, OrderObat $obat)
    {
        $data_returobat = $request->only(["waktu_pengembalian","jumlah_terpakai","alasan_pengembalian"]);
        $obat->returobat()->create($data_returobat);
        return redirect()->route("pasien.show",["rawatInap"=>$rawatInap->id_rawatinap]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
