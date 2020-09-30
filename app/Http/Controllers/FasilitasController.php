<?php

namespace App\Http\Controllers;

use App\Fasilitas;
use Auth;
use Hash;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_poli = Auth::user()->poli->id_poli;

        $fasilitas = Fasilitas::where("id_poli", $id_poli)->orderBy("nama_fasilitas")->get();
        return view("admin.fasilitas.index", ["fasilitas" => $fasilitas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.fasilitas.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_poli = Auth::user()->poli->id_poli;


        $data_fasilitas = $request->only([
            "nama_fasilitas",
            "jenis_fasilitas",
            "harga_fasilitas"
        ]);
        $data_fasilitas["id_poli"] = $id_poli;

        Fasilitas::create($data_fasilitas);
        return redirect()->route("fasilitas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fasilitas $fasilitas)
    {
        $fasilitas->delete();
        return redirect()->route("fasilitas.index");
    }
}
