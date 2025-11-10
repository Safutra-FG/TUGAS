<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_pegawai extends Controller
{
    public function index(){
        return view('pegawai.index');
    }
}
