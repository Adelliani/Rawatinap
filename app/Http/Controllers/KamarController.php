<?php

namespace App\Http\Controllers;

use App\Kamar;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = Kamar::whereHas("ruang", function (Builder $query) {
            $query->whereHas("gedung", function (Builder $queryRuang) {
                $queryRuang->where("id_poli", 1);
            });
        })->orderBy("nama_kamar")->get();
        return view("admin.ruangan.kamar.index", ["kamars" => $kamar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.ruangan.kamar.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_kamar = $request->only(["nama_kamar", "id_ruang", "kelas", "fasilitas", "harga_kamar", "jumlah_kasur"]);
        Kamar::create($data_kamar);
        return redirect()->route("kamar.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamar $kamar)
    {
        return view("admin.ruangan.kamar.edit", ["kamar" => $kamar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamar $kamar)
    {
        $kamar->nama_kamar = $request->input("nama_kamar");
        $kamar->id_ruang = $request->input("id_ruang");
        $kamar->kelas = $request->input("kelas");
        $kamar->fasilitas = $request->input("fasilitas");
        $kamar->harga_kamar = $request->input("harga_kamar");
        $kamar->jumlah_kasur = $request->input("jumlah_kasur");
        
        $kamar->save();
        return redirect()->route("kamar.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kamar)
    {
        //
    }
}
