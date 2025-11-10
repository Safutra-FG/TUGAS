@extends('layout.v_template2')

@section('title')
    Page Mahasiswa
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Halaman Mahasiswa</h1>
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
                </div>
            </div>
        </div>
    </main>
@endsection
