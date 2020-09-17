<?php

namespace App\Http\Controllers;

use App\Ruang;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruangs = Ruang::whereHas("gedung", function (Builder $query) {
            $query->where("id_poli", 1);
        })->orderBy("nama_ruang")->get();

        return view("admin.ruangan.ruang.index", ["ruangs" => $ruangs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.ruangan.ruang.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_ruang = $request->only(["nama_ruang","id_gedung"]);
        Ruang::create($data_ruang);
        return redirect()->route("ruang.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function show(Ruang $ruang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruang $ruang)
    {
        return view("admin.ruangan.ruang.edit", ["ruang" => $ruang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruang $ruang)
    {
        $ruang->nama_ruang = $request->input("nama_ruang");
        $ruang->id_gedung = $request->input("id_gedung");
        
        $ruang->save();
        return redirect()->route("ruang.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruang $ruang)
    {
        $ruang->delete();
        return redirect()->route("ruang.index");
    }
}
