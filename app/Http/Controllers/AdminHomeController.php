<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function __invoke()
    {
        return view("admin.index");
    }
}
