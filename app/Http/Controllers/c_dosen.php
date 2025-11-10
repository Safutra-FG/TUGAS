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
        return view('dosen.index',$data);
    }

    public function detail($id_dosen)
    {
        if(!$this->M_Dosen->detailData($id_dosen))
        {abort(405);
        }
        $data = ['dosen' => $this->M_Dosen->detailData($id_dosen)];
        return view('v_detaildosen', $data);

    }

    public function add()
    {
        return view('v_adddosen');
    }
    
    public function insert()
    {
        Request()->validate([
            'nip' => 'required|unique:dosen,nip|min:17|max:18',
            'nama_dosen' => 'required',
            'mata_kuliah' => 'required',
            'foto_dosen' => 'required|mimes:jpg,jpeg,png,bmp|max:1024',
        ],[
            'nip.required' => 'NIP Wajib diisi !',
            'nip.unique' => 'NIP ini sudah terdaftar !',
            'nip.min' => 'NIP minimal 17 karakter !',
            'nip.max' => 'Nip Minimal 18 karakter!',
            'nama_dosen.required' => 'Nama Dosen wajib diisi !',
            'mata_kuliah.required' => 'Nama Kuliah Wajib diisi !',
            'foto_dosen.required' => 'Foto Dosen Wajib diisi !',
        ]);

        $file = Request()->foto_dosen;
        $fileName = Request()->nip .'.'. $file->extension();
        $file->move(public_path('foto_dosen'),$fileName);

        $data =[
            'nip' => Request()->nip,
            'nama_dosen' => Request()->nama_dosen,
            'mata_kuliah' => Request()->mata_kuliah,
            'foto_dosen' => $fileName,
        ];
        $this->M_Dosen->addData($data);
        return redirect()->route('dosen')->with('pesan','Data Berhasil ditambahkan : ');
    }

    public function edit($id_dosen)
    {
        if(!$this->M_Dosen->detailData($id_dosen))
            {abort(404);
            }
            
            $data = ['dosen' => $this->M_Dosen->detailData($id_dosen)
        ];
        return view('v_editdosen',$data);
    }
    


    public function update($id_dosen) 
    { 
        Request()->validate([ 
            'nip' => 'required|min:17|max:18', 
            'nama_dosen' => 'required', 
            'mata_kuliah' => 'required', 
            'foto_dosen' => 'mimes:jpg,jpeg,png,bmp|max:1024', 
        ], [ 
            'nip.required' => 'NIP wajib di isi !', 
            'nip.min' => 'NIP minimal 17 karakter', 
            'nip.max' => 'NIP maksimal 18 karakter', 
            'nama_dosen.required' => 'Nama Dosen wajib di isi !', 
            'mata_kuliah.required' => 'Nama Mata Kuliah wajib di isi !', 
        ]); 

        //jika validasi tidak ada maka lakukan simpan data 
        if (Request()->foto_dosen <> "") { 
            //jika ganti gambar/foto 
            $file = Request()->foto_dosen; 
            $fileName = Request()->nip . '.' . $file->extension(); 
            $file->move(public_path('foto_dosen'), $fileName); 
            $data = [ 
                'nip' => Request()->nip, 
                'nama_dosen' => Request()->nama_dosen, 
                'mata_kuliah' => Request()->mata_kuliah, 
                'foto_dosen' => $fileName, 
            ]; 
            $this->M_Dosen->editData($id_dosen, $data); 
        } else { 
            //jika tidak ganti gambar/foto 
            $data = [ 
                'nip' => Request()->nip, 
                'nama_dosen' => Request()->nama_dosen, 
                'mata_kuliah' => Request()->mata_kuliah, 
            ]; 
            $this->M_Dosen->editData($id_dosen, $data); 
        } 
        return redirect()->route('dosen')->with('pesan', 'Data berhasil diupdate !'); 
    } 

    public function delete($id_dosen) 
    {
        if(!$this->M_Dosen->detailData($id_dosen))
        {
            abort(404);
        }
        
        //hapus atau delete foto 
        $dosen = $this->M_Dosen->detailData($id_dosen); 
        if ($dosen->foto_dosen <> "") { 
            $fotoPath = public_path('foto_dosen/' . $dosen->foto_dosen);
            if (file_exists($fotoPath)) {
                unlink($fotoPath); 
            }
        }
        $this->M_Dosen->deleteData($id_dosen); 
        return redirect()->route('dosen')->with('pesan', 'Data berhasil dihapus !'); 
    }

}