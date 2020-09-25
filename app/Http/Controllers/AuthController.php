<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login_page(Request $request)
    {
        return view("login");
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            "username" => ["required"],
            "password" => ["required"]
        ]);

        if (Auth::attempt($request->only(["username", "password"]))) {

            if (Auth::user()->jenis_user == 1){
                return redirect()->route("superadmin.index");
            }elseif(Auth::user()->jenis_user==2){
                return redirect()->route("admin.index");
            }elseif (Auth::user()->jenis_user==3){
                return redirect()->route("pasien.index");
            }elseif(Auth::user()->jenis_user==4){
                return redirect()->route("pelayanan.index");
            }

        } else {

            return back();
        }
    }
}
