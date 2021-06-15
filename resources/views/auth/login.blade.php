<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Sistem Informasi Akademik MAN 2 Kota Tangerang</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/css/sb-admin-2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/sass/style.css') }}">
    <script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $(".buat_akun").click(function(){
                alert("Silahkan hubungi pihak madrasah untuk membuat akun!")
            });
        });

    </script>

</head>
<style>
    body{
        background: url("{{ asset('assets/frontend/img/bgsiaman.png') }}") !important;
        background-repeat: repeat !important;
        background-size: 150px !important;
    }
</style>
<body class="bg-gradient-primary">

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
                                    <div class="text-center">
                                        <img id="siaman-logo" src="{{ asset('assets/frontend/img/siaman.png') }}" alt="">
                                    </div>
                                    @if (session('error'))
                                        <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    @if (session('gagal_login'))
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            {{ session('gagal_login') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <form class="user" action="{{ url('login/proses') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" name="username"  class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan NISN/NIP" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Kata Sandi" required>
                                        </div>
                                        <button type="submit" class="btn btn-login btn-primary btn-user btn-block">
                                            Masuk
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a href="#" class="small buat_akun">Belum Punya Akun?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script src="{{ asset('assets/frontend/bootstrap/js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/frontend/sbadmin2/js/sb-admin-2.min.js') }}"></script> --}}
</body>
</html>