<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_dosen extends Controller
{
    public function index() {
        return view('v_dosen');
    }
}
