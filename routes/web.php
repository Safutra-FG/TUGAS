<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_home;
use App\Http\Controllers\c_about;
use App\Http\Controllers\c_contact;
use App\Http\Controllers\c_login;
use App\Http\Controllers\c_register;

// login
use App\Http\Controllers\c_admin;
use App\Http\Controllers\c_pegawai;
use App\Http\Controllers\c_mahasiswa;
use App\Http\Controllers\c_dosen;



Route :: get('/', [c_login::class, 'index'])->name('root');
Route :: post('/login', [c_login::class,'login'])->name('login');
Route :: get('/logout', [c_login::class,'logout'])->name('admin.logout');
Route :: get('/register', [c_register::class,'index']);
Route :: post('/register/proses', [c_register::class,'register'])->name('register-proses');
Route :: get('/contact', [c_contact::class, 'index']);
Route :: get('/dosen/index', [c_dosen::class, 'index'])->name('dosen.index');
Route :: get('/pegawai/index', [c_pegawai::class, 'index'])->name('pegawai.index');
Route :: get('/mahasiswa/index', [c_mahasiswa::class, 'index'])->name('mahasiswa.index');
Route :: get('/dosen/detail/{id_dosen}', [c_dosen::class, 'detail']);
Route :: get('/dosen/add', [c_dosen::class, 'add']);
Route :: post('/dosen/insert', [c_dosen::class, 'insert']);
Route :: get('/dosen/edit/{id_dosen}', [c_dosen::class, 'edit']);
Route :: post('/dosen/update/{id_dosen}', [c_dosen::class, 'update']);
Route :: get('/dosen/delete/{id_dosen}', [c_dosen::class, 'delete']);
Route :: get('/mahasiswa', [c_mahasiswa::class, 'index']);
Route :: get('/about/{nama_pt}', [c_about::class, 'index'])->name (name: 'about');

// Login
Route::get('/admin', [c_admin::class, 'index'])->name('admin.index');
