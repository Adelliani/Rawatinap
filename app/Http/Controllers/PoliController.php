<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poli;
use Composer\DependencyResolver\Pool;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("superadmin.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_poli = $request->only([
            "nama_poli",
            "alamat",
            "akreditasi",
        ]);


        Poli::create($data_poli);

        return redirect()->route("superadmin.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Poli $poli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Poli $poli)
    {
        return view("superadmin.edit", ["poli" => $poli]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poli $poli)
    {
        $poli->nama_poli = $request->input("nama_poli");
        $poli->alamat = $request->input("alamat");
        $poli->akreditasi = $request->input("akreditasi");

        $poli->save();
        return redirect()->route("superadmin.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Poli $poli)
    {
        $poli->delete();
        return redirect()->route("superadmin.index");
    }
}
