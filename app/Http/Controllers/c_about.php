<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_about extends Controller
{
        public function index($nama_pt) {
            $data =[
                'nama_pt'=> $nama_pt,
                'alamat' => "Cibogo Subang",
            ];
        return view('v_about', $data);
    }
}
