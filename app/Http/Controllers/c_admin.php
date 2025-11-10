<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_admin extends Controller
{
        public function index(){
        return view('admin.index');
    }
}
