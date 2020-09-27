<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\User;
use Hash;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais = Pegawai::where("id_poli", 1)->orderBy("nama_pegawai")->get();
        return view("admin.pegawai.index", ["pegawais" => $pegawais]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pegawai.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_pegawai = $request->only([
            "nama_pegawai",
            "jenis_kelamin",
            "posisi",
            "notelp",
            "alamat",

            "id_shift",
        ]);
        $data_pegawai["id_poli"] = 1;

        $pegawai = Pegawai::create($data_pegawai);

        $username = lcfirst(join("", explode(" ", ucwords($request->input("nama_poli")))));
        $password = Hash::make("0123456789");

        $data_user = [
            "username" => $username,
            "password" => $password,
            "jenis_user" => 2
        ];
        $akun = User::create($data_user);

        $akun->pegawai()->save($pegawai);

        return redirect()->route("pegawai.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        return view("admin.pegawai.edit", ["pegawai" => $pegawai]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $pegawai->nama_pegawai = $request->input("nama_pegawai");
        $pegawai->jenis_kelamin = $request->input("jenis_kelamin");
        $pegawai->posisi = $request->input("posisi");
        $pegawai->notelp = $request->input("notelp");
        $pegawai->alamat = $request->input("alamat");
        $pegawai->id_shift = $request->input("id_shift");
        
        $pegawai->save();
        return redirect()->route("pegawai.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route("pegawai.index");
    }
}
