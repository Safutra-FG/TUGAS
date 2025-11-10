<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // Import facade DB

class M_User extends Model
{
    use HasFactory;

    // Fungsi untuk menyimpan data registrasi ke tabel 'users'
    public function registerData($data)
    {
        DB::table('users')->insert($data);
    }
}