<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        if (Auth::user()->poli) {
            return view("user.poli", ["user" => Auth::user()]);
        } elseif (Auth::check()) {
            return view("user.staff", ["user" => Auth::user()]);
        }
        return abort(401);
    }
}
