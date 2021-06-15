@extends('master')

@section('content')
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-4 col-md-4">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="p-5">
                                <h1 class="text-center mb-5"><b>Registrasi Akun Siswa</b></h1>
                                <div class="text-center">
                                    
                                </div>
                                @if (session('sukses'))
                                    <div class="alert alert-success alert-dismissible fade show align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                        </svg>
                                        {{ session('sukses') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <form class="user" action="{{ url('admin/auth/proses-registrasi-siswa') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="text" name="name_siswa" placeholder="Nama Lengkap" class="form-control input-reg">
                                    <input type="text" name="nisn" placeholder="NISN" class="form-control input-reg">
                                    <input type="hidden" name="level" placeholder="Level" value="siswa" class="form-control input-reg">
                                    <input type="hidden" name="jabatan" placeholder="Jabatan" value="Siswa" class="form-control input-reg">
                                    <input type="password" name="password" placeholder="Password" class="form-control input-reg mb-4">
                                    <button type="submit" class="btn btn-login btn-primary btn-block input-reg">Buat Akun</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection