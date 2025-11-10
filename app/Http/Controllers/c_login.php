<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class C_Login extends Controller
{
    public function index()
    {
        if (session()->has('user')) {
            return $this->redirectBasedOnLevel(session('user')->level);
        }
        return view('v_login');
    }

    // Memproses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $user = DB::table('users')->where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            
            session(['user' => $user]);

            $alertScript = "<script>alert('Berhasil login sebagai " . $user->name . "');</script>";

            return $this->redirectBasedOnLevel($user->level)->with('alertScript', $alertScript);

        } else {
            return redirect()->route('root')->with('error', 'Email atau password salah!');
        }
    }

    private function redirectBasedOnLevel($level)
    {
        switch ($level) {
            case 1: 
                return redirect()->route('admin.index'); 
            case 2: 
                return redirect()->route('pegawai.index'); 
            case 3: 
                return redirect()->route('mahasiswa.index');
            case 4: 
                return redirect()->route('dosen.index'); 
            default:
                session()->forget('user');
                return redirect()->route('root')->with('error', 'Level user tidak valid.');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        $request->session()->flush(); 
        return redirect()->route('root')->with('success', 'Logout Berhasil!');
    }
}