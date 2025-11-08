@extends('layout.v_template2')

@section('title')
    Page Dosen
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Halaman Dosen</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Static Navigation</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    @if(session('pesan'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h5><i class="icon fas fa-check"></i> Success</h5>
                        {{session('pesan')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>    
                    @endif
                    <div align="right">
                        <a href="/dosen/add" class="btn btn-sm btn-primary">Add Data</a>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>NO</th>
                            <th>NIP</th>
                            <th>Nama Dosen</th>
                            <th>Mata Kuliah</th>
                            <th>Foto Dosen</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;?>
                        @foreach ($dosen as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->nip}}</td>
                            <td>{{$data->nama_dosen}}</td>
                            <td>{{$data->mata_kuliah}}</td>
                            <td><img src="{{url('foto_dosen/'.$data->foto_dosen)}}" width="100px" alt="POTO DOSEN KESAYANGAN"></td>
                            <td>
                                <a href="/dosen/detail/{{$data->id_dosen}}" class="btn btn-success btn-sm">Detail</a>
                                <a href="/dosen/edit/{{$data->id_dosen}}" class="btn btn-warning btn-sm ">Edit</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$data->id_dosen}}">
                                    Delete
                                </button>   
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>NIP</th>
                            <th>Nama Dosen</th>
                            <th>Mata Kuliah</th>
                            <th>Foto Dosen</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
                @foreach ($dosen as $data)
                <div class="modal fade" id="delete{{$data->id_dosen}}" tabindex="-1" aria-labelledby="deleteLabel{{$data->id_dosen}}" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content bg-danger">
                            <div class="modal-header">
                                <h6 class="modal-title" id="deleteLabel{{$data->id_dosen}}">{{$data->nama_dosen}}</h6>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah ingin menghapus data ini? </p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <a href="/dosen/delete/{{$data->id_dosen}}" class="btn btn-outline-light">YES</a>
                                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">NO</button>
                            </div>
                        </div>
                    </div>
                </div> 
                @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
