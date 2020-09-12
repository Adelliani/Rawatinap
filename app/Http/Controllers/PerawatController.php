<?php

namespace App\Http\Controllers;

use App\Perawat;
use Illuminate\Http\Request;

class PerawatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perawats = Perawat::where("id_poli", 1)->orderBy("nama_perawat")->get();
        return view("admin.perawat.index", ["perawats" => $perawats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.perawat.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data_perawat = $request->only([
            "nama_perawat",
            "jenis_kelamin",
            "notelp",
            "alamat",

            "id_shift",
        ]);

        $data_perawat["id_poli"] = 1;

        Perawat::create($data_perawat);
        return redirect()->route("perawat.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function show(Perawat $perawat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function edit(Perawat $perawat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perawat $perawat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perawat  $perawat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perawat $perawat)
    {
        //
    }
}
