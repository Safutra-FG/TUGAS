<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                .
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    @if(session('pesan'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>    
                            <h5><i class="icon fas fa-check"></i>success</h5>
                            {{session('pesan')}}
                        </div>    
                        @endif
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
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no=1;?>
                        @foreach ($dosen as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->NIP}}</td>
                            <td>{{$data->nama_dosen}}</td>
                            <td>{{$data->Matakuliah}}</td>
                            <td><img src="{{url('foto_dosen/'.$data->foto_dosen)}}" width="100px" alt="POTO DOSEN KESAYANGAN"></td>
                            <td>
                                <a href="/dosen/detail/{$data->id_dosen}">Detail</a>
                                <a href="/dosen/edit/{$data->id_dosen}">Edit</a>
                                <button type="button" data-target="#delete{{$data->id_dosen}}">Delet</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>