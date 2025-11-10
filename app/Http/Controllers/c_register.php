<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_User;
use Illuminate\Support\Facades\Hash; // Diperlukan untuk enkripsi password

class C_Register extends Controller
{
    protected $M_User;

    public function __construct(M_User $M_User)
    {
        $this->M_User = $M_User;
    }

    // Menampilkan halaman form register
    public function index()
    {
        return view('v_register');
    }

    // Memproses data registrasi
    public function register(Request $request)
    {
        // Script alert sesuai dokumen halaman 8
        $alertScript2 = "<script>alert('Registrasi User Berhasil');</script>";

        $id= "";
        $email_verifed_at = "" ;
        $data = [
            'name'              => $request->input('name'),
            'email'             => $request->input('email'),
            'email_verified_at' => null,
            'password'          => Hash::make($request->input('password')), // Password di-hash agar aman
            'remember_token'    => null,
            'created_at'        => now(),
            'updated_at'        => now(),
            'level'             => $request->input('level') // Level diambil dari dropdown di view
        ];

        // Memanggil fungsi di model untuk menyimpan data
        $this->M_User->registerData($data);

        // Redirect ke halaman root (login) dengan membawa alert
        return redirect()->route('root')->with('alertScript2', $alertScript2);
    }
}