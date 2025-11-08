<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_home;
use App\Http\Controllers\c_about;
use App\Http\Controllers\c_dosen;
use App\Http\Controllers\c_contact;
use App\Http\Controllers\c_mahasiswa;


Route :: view('/', function () {
    return view('welcome2');
});


Route :: view('/', 'v_dashboard');
Route :: get('/home', [c_home::class,'index']);
Route :: get('/contact', [c_contact::class, 'index']);
Route :: get('/dosen', [c_dosen::class, 'index'])->name('dosen');
Route :: get('/dosen/detail/{id_dosen}', [c_dosen::class, 'detail']);
Route :: get('/dosen/add', [c_dosen::class, 'add']);
Route :: post('/dosen/insert', [c_dosen::class, 'insert']);
Route :: get('/dosen/edit/{id_dosen}', [c_dosen::class, 'edit']);
Route :: post('/dosen/update/{id_dosen}', [c_dosen::class, 'update']);
Route :: get('/dosen/delete/{id_dosen}', [c_dosen::class, 'delete']);
Route :: get('/mahasiswa', [c_mahasiswa::class, 'index']);
Route :: get('/about/{nama_pt}', [c_about::class, 'index'])->name (name: 'about');

