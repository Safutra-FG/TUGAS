<?php

namespace App\Http\Controllers;

use App\Models\M_Dosen;
use Illuminate\Http\Request;

class c_dosen extends Controller
{
    public function __construct(){
        $this->M_Dosen = new M_Dosen();
    }
    
    public function index() {
        $data = [
            'dosen' => $this->M_Dosen->allData(),
        ];
        return view('v_dosen',$data);
    }

    public function detail($id_dosen)
    {
        if(!$this->M_Dosen->detailData($id_dosen))
        {abort(405);
        }
        $data = ['dosen' => $this->M_Dosen->detailData($id_dosen)];
        return view('v_detaildosen', $data);

    }
}
