<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_mahasiswa extends Controller
{
        public function index() {
        return view('v_mahasiswa');
    }
}
