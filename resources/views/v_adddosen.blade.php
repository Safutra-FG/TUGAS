@extends('layout.v_template2') 

@section('title') 
Dosen 
@endsection 

@section('page') 
Tambah Data Dosen 
@endsection 

@section('content') 
<div class="container-fluid"> 
    <div class="row"> 
        <div class="col-md-6"> 
            <div class="card card-primary"> 
                <div class="card-header"> 
                    <h3 class="card-title">Form Add</h3> 
                </div> 
                
                <form action="/dosen/insert" method="POST" enctype="multipart/form-data"> 
                    @csrf 
                    <div class="card-body"> 
                        <div class="form-group"> 
                            <label for="exampleInputEmail1">NIP</label> 
                            <input type="text" name="nip" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIP" value="{{ old('nip') }}"> 
                            <div class="text-danger"> 
                                @error('nip') 
                                    {{ $message }} 
                                @enderror 
                            </div> 
                        </div> 
                        <div class="form-group"> 
                            <label for="exampleInputEmail1">Nama Dosen</label> 
                            <input type="text" name="nama_dosen" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Dosen" value="{{ old('nama_dosen') }}"> 
                            <div class="text-danger"> 
                                @error('nama_dosen') 
                                    {{ $message }} 
                                @enderror 
                            </div> 
                        </div> 
                        <div class="form-group"> 
                            <label for="exampleInputEmail1">Mata Kuliah</label> 
                            <input type="text" name="mata_kuliah" class="form-control" id="exampleInputEmail1" placeholder="Masukan Mata Kuliah" value="{{ old('mata_kuliah') }}"> 
                            <div class="text-danger"> 
                                @error('mata_kuliah') 
                                    {{ $message }} 
                                @enderror 
                            </div> 
                        </div> 
                        <div class="form-group"> 
                            <label for="exampleInputFile">Foto Dosen</label> 
                            <div class="input-group"> 
                                <div class="custom-file"> 
                                    <input type="file" name="foto_dosen" class="custom-file-input" id="exampleInputFile"> 
                                </div> 
                            </div> 
                            <div class="text-danger"> 
                                @error('foto_dosen') 
                                    {{ $message }} 
                                @enderror 
                            </div> 
                        </div> 
                    </div> 
                    <div class="card-footer"> 
                        <button type="submit" class="btn btn-primary">Insert</button> 
                    </div> 
                </form> 
            </div> 
            </div> 
    </div> 
</div> 
@endsection 