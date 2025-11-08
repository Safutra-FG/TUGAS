<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_Dosen extends Model
{
    public function alldata()
    {
        return DB::table('dosen')->get();
    }

    public function detailData($id_dosen)
    {
        return DB::table('dosen')-> where ('id_dosen', $id_dosen)->first();
    }
    
    public function addData($data)
    {
        DB::table('dosen')->insert($data);
    }

    public function editData($id_dosen, $data)
    {
        DB::table('dosen')->where('id_dosen', $id_dosen)->update($data);
    }
    
    public function deleteData($id_dosen)
    {
        DB::table('dosen')->where('id_dosen', $id_dosen)->delete();
    }
    
}
