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

        $fasilita = Fasilitas::where("id_poli", $id_poli)->orderBy("nama_fasilitas")->get();
        return view("admin.fasilitas.index", ["fasilitas" => $fasilita]);
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
        if (Auth::user()->can("create", Fasilitas::class)) {
            $data_fasilitas = $request->only([
                "nama_fasilitas",
                "jenis_fasilitas",
                "harga_fasilitas"
            ]);
            $data_fasilitas["id_poli"] = Auth::user()->poli->id_poli;

            Fasilitas::create($data_fasilitas);
            return redirect()->route("fasilitas.index");
        } else {
            return redirect()->route("fasilitas.index");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fasilitas  $fasilita
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitas $fasilita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fasilitas  $fasilita
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasilitas $fasilita)
    {
        if (Auth::user()->can("update", $fasilita)) {
            return view("admin.fasilitas.edit", ["fasilitas" => $fasilita]);
        } else {
            return redirect()->route("fasilitas.index");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fasilitas  $fasilita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fasilitas $fasilita)
    {
        if (Auth::user()->can("update", $fasilita)) {
            $fasilita->nama_fasilitas = $request->input("nama_fasilitas");
            $fasilita->jenis_fasilitas = $request->input("jenis_fasilitas");
            $fasilita->harga_fasilitas = $request->input("harga_fasilitas");

            $fasilita->save();
            return redirect()->route("fasilitas.index");
        } else {
            return redirect()->route("fasilitas.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fasilitas  $fasilita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fasilitas $fasilita)
    {
        if (Auth::user()->can("delete", $fasilita)) {
            $fasilita->delete();
            return redirect()->route("fasilitas.index");
        } else {
            return redirect()->route("fasilitas.index");
        }
    }
}
