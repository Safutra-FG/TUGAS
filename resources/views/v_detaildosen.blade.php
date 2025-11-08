@extends('layout.v_template_tables')

@section('title')
  Halaman Detail Dosen
@endsection

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Halaman Detail Dosen</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/dosen">Dosen</a></li>
        <li class="breadcrumb-item active">Detail Dosen</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user me-1"></i>
            Quick Example
        </div>
        <div class="card-body">
            
            <table class="table table-borderless">
                <tr>
                    <td width="150px"><strong>NIP</strong></td>
                    <td width="30px">:</td>
                    <td>{{ $dosen->nip }}</td>
                </tr>
                <tr>
                    <td><strong>Nama Dosen</strong></td>
                    <td>:</td>
                    <td>{{ $dosen->nama_dosen }}</td>
                </tr>
                <tr>
                    <td><strong>Mata Kuliah</strong></td>
                    <td>:</td>
                    <td>{{ $dosen->mata_kuliah }}</td>
                </tr>
                <tr>
                    <td style="vertical-align: top;"><strong>Foto</strong></td>
                    <td style="vertical-align: top;">:</td>
                    <td>
                        <img src="{{ url('foto_dosen/'.$dosen->foto_dosen) }}" width="200px" alt="Foto Dosen">
                    </td>
                </tr>
            </table>

        </div>
        <div class="card-footer">
            <a href="/dosen" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection