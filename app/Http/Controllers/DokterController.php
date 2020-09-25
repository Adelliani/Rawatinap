<?php

namespace App\Http\Controllers;

use App\Dokter;
use App\User;
use Hash;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokters = Dokter::where("id_poli", 1)->orderBy("nama_dokter")->get();
        return view("admin.dokter.index", ["dokters" => $dokters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.dokter.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_dokter = $request->only(["nama_dokter", "jenis_kelamin", "jenis_dokter", "spesialisasi", "notelp", "alamat"]);
        $data_dokter["id_poli"] = 1;
        $dokter = Dokter::create($data_dokter);

        $username = lcfirst(join("", explode(" ", ucwords($request->input("nama_poli")))));
        $password = Hash::make("0123456789");

        $data_user = [
            "username" => $username,
            "password" => $password,
            "jenis_user" => 2
        ];
        $akun = User::create($data_user);

        $akun->dokter()->save($dokter);
        return redirect()->route("dokter.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokter $dokter)
    {
        return view("admin.dokter.edit", ["dokter" => $dokter]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokter $dokter)
    {
        $dokter->nama_dokter = $request->input("nama_dokter");
        $dokter->jenis_kelamin = $request->input("jenis_kelamin");
        $dokter->jenis_dokter = $request->input("jenis_dokter");
        $dokter->spesialisasi = $request->input("spesialisasi");
        $dokter->notelp = $request->input("notelp");
        $dokter->alamat = $request->input("alamat");

        $dokter->save();
        return redirect()->route("dokter.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokter $dokter)
    {
        $dokter->delete();
        return redirect()->route("dokter.index");
    }
}
