<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
        <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                    </div>
                                    <div class="card-body">
                                        @if ($errors->any())
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Gagal!</strong> Periksa kembali inputan Anda.
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif

                                        <form action="{{ route('register-proses') }}" method="POST">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control @error('name') is-invalid @enderror" 
                                                       id="inputName" 
                                                       type="text" 
                                                       name="name" 
                                                       value="{{ old('name') }}" 
                                                       placeholder="Enter your name" 
                                                       required />
                                                <label for="inputName">Name</label>
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control @error('email') is-invalid @enderror" 
                                                       id="inputEmail" 
                                                       type="email" 
                                                       name="email" 
                                                       value="{{ old('email') }}" 
                                                       placeholder="name@example.com" 
                                                       required />
                                                <label for="inputEmail">Email address</label>
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control @error('password') is-invalid @enderror" 
                                                               id="inputPassword" 
                                                               type="password" 
                                                               name="password" 
                                                               placeholder="Create a password" 
                                                               required />
                                                        <label for="inputPassword">Password</label>
                                                        @error('password')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-select @error('level') is-invalid @enderror" 
                                                                id="inputLevel" 
                                                                name="level" 
                                                                required>
                                                            <option value="" selected disabled>Pilih Level User</option>
                                                            <option value="1" {{ old('level') == '1' ? 'selected' : '' }}>Administrator</option>
                                                            <option value="2" {{ old('level') == '2' ? 'selected' : '' }}>Pegawai</option>
                                                            <option value="3" {{ old('level') == '3' ? 'selected' : '' }}>Mahasiswa</option>
                                                            <option value="4" {{ old('level') == '4' ? 'selected' : '' }}>Dosen</option>
                                                        </select>
                                                        <label for="inputLevel">Level User</label>
                                                        @error('level')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{ route('root') }}">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2025 </div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('template/js/scripts.js') }}"></script>
    </body>
</html>