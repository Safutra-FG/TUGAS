<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_home extends Controller
{
    public function index() {
        return view('admin.v_home');
    }
}
