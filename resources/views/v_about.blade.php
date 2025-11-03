@extends('layout.v_template2')

@section('title')
    Page About
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Halaman About</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Static Navigation</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <p class="mb-0">
                        This page is an example of using static navigation. By removing the
                        <code>.sb-nav-fixed</code>
                        class from the
                        <code>body</code>
                        , the top navigation and side navigation will become static on scroll. Scroll down this page to see
                        an example.
                        <br>
                        <h2>
                            Nama Perguruan Tinggi: {{$nama_pt}}
                        </h2>
                        <br>
                        <h2>
                        Alamat: {{$alamat}}
                        </h2>
                        <br>
                    </p>
                </div>
            </div>
            <div style="height: 100vh"></div>
            <div class="card mb-4">
                <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the
                    static navigation demo.</div>
            </div>
        </div>
    </main>
@endsection
