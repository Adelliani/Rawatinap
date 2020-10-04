<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        if (Auth::user()->poli) {
            return view("user.poli");
        } elseif (Auth::check()) {
            return view("user.staff");
        }
        return abort(401);
    }
}
