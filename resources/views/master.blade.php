<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik MAN 2 Kota Tangerang</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/sass/style.css') }}">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/css/sb-admin-2.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    @yield('css_jss_tambahan')
    <script>
        $(document).ready(function(){
            $(".buat_akun").click(function(){
                alert("Silahkan hubungi pihak madrasah untuk membuat akun!")
            });
        });
    </script>
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <div class="bg-logo">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <img id="logo-dashboard" src="{{asset('assets/frontend/img/siamandash.png')}}" alt="">
                </a>
            </div>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            {{-- MENU UNTUK ADMIN --}}
            @if ($user->level == 'admin')
                <!-- Nav Item - Dashboard -->
                <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('admin/dashboard') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Informasi Siswa
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item {{ Request::is('admin/absensi') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="{{ url('admin/absensi') }}" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-user-check"></i>
                        <span>Absensi Siswa</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/input-kelas') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="{{ url('admin/input-kelas') }}" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-plus-square"></i>
                        <span>Input Kelas Siswa</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/input-jadwal') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="{{ url('admin/input-jadwal') }}" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-calendar-plus"></i>
                        <span>Input Jadwal Pelajaran</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/jadwal_pelajaran') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="{{ url('admin/jadwal_pelajaran') }}" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-calendar-week"></i>
                        <span>Jadwal Pelajaran</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/daftar_laporan') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="{{ url('admin/daftar_laporan') }}" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-tasks"></i>
                        <span>Progress Laporan</span>
                    </a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">

                <li class="nav-item {{ Request::is('admin/registrasi') ? 'active' : '' }} {{ Request::is('admin/registrasi-siswa') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse"
                    aria-expanded="true" aria-controls="collapse">
                    <i class="fas fa-file-alt"></i>
                    <span>Registrasi Akun</span>
                    </a>
                    <div id="collapse" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item {{ Request::is('admin/registrasi') ? 'bg-primary' : '' }}" href="{{ url('admin/registrasi') }}">Registrasi Pegawai</a>
                            <a class="collapse-item {{ Request::is('admin/registrasi-siswa') ? 'bg-primary' : '' }}" href="{{ url('admin/registrasi-siswa') }}">Registrasi Siswa</a>
                        </div>
                    </div>
                </li>
            @endif
            {{-- MENU UNTUK GURU --}}
            @if ($user->level == 'guru')
                <!-- Nav Item - Dashboard -->
                <li class="nav-item {{ Request::is('guru/dashboard') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('guru/dashboard') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Informasi Siswa
                </div>

                <!-- buat ditampilin di guru -->

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item {{ Request::is('guru/input_formatif') ? 'active' : '' }} {{ Request::is('guru/input_uts') ? 'active' : '' }} {{ Request::is('guru/input_uas') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#inputnilai"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-file-alt"></i>
                    <span>Input Nilai</span>
                    </a>
                    <div id="inputnilai" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pilih Jenis Nilai</h6>
                            <a class="collapse-item {{ Request::is('guru/input_formatif') ? 'bg-primary' : '' }}" href="{{ url('guru/input_formatif') }}">Formatif</a>
                            <a class="collapse-item {{ Request::is('guru/input_uts') ? 'bg-primary' : '' }}" href="{{ url('guru/input_uts') }}">UTS</a>
                            <a class="collapse-item {{ Request::is('guru/input_uas') ? 'bg-primary' : '' }}" href="{{ url('guru/input_uas') }}">UAS</a>
                            <!-- <a class="collapse-item" href="ujian.html">Tampilkan Semua</a> -->
                        </div>
                    </div>
                </li>
                <li class="nav-item {{ Request::is('guru/lapor_masalah') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="{{ url('guru/lapor_masalah') }}" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-flag"></i>
                        <span>Lapor Siswa Bermasalah</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('guru/daftar_laporan') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="{{ url('guru/daftar_laporan') }}" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-tasks"></i>
                        <span>Progress Laporan</span>
                    </a>
                </li>
            @endif

            {{-- MENU UNTUK SISWA --}}
            @if ($user->level == 'siswa')
                <!-- Nav Item - Dashboard -->
                <li class="nav-item {{ Request::is('siswa/dashboard') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('siswa/dashboard') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Informasi Siswa
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item {{ Request::is('siswa/absensi') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="{{ url('siswa/absensi') }}" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-user-check"></i>
                        <span>Absensi Siswa</span>
                    </a>
                </li>
                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item {{ Request::is('siswa/nilai-formatif') ? 'active' : '' }} {{ Request::is('siswa/nilai-uts') ? 'active' : '' }} {{ Request::is('siswa/nilai-uas') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-file-alt"></i>
                    <span>Nilai</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Transkrip Nilai :</h6>
                            <a class="collapse-item {{ Request::is('siswa/nilai-formatif') ? 'bg-primary' : '' }}" href="{{ url('siswa/nilai-formatif') }}">Formatif</a>
                            <a class="collapse-item {{ Request::is('siswa/nilai-uts') ? 'bg-primary' : '' }}" href="{{ url('siswa/nilai-uts') }}">UTS</a>
                            <a class="collapse-item {{ Request::is('siswa/nilai-uas') ? 'bg-primary' : '' }}" href="{{ url('siswa/nilai-uas') }}">UAS</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item {{ Request::is('siswa/jadwal_pelajaran') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="{{ url('siswa/jadwal_pelajaran') }}" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-calendar-week"></i>
                        <span>Jadwal Pelajaran</span>
                    </a>
                </li>
            @endif

            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('assets/frontend/vendor/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModalLong">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Pengaturan Akun
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kelompok 4</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Profil Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Profil Saya</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center text-center">
                        <div class="col">
                            <!-- Trigger the Modal -->
                            <img id="myImg" src="{{ asset('assets/frontend/vendor/img/undraw_profile.svg') }}" alt="Douglas McGee" class="img-profile">

                            <!-- The Modal -->
                            <div id="myModal" class="modal-zoom">

                                <!-- The Close Button -->
                                <span class="close-zoom">&times;</span>

                                <!-- Modal Content (The Image) -->
                                <img class="modal-zoom-content" id="img01">

                                <!-- Modal Caption (Image Text) -->
                                <div id="caption"></div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <br>
                    <table cellpadding="10px">
                        @if ($user->level == 'admin')
                            <tr>
                                <th>NIP</th>
                                <td>:</td>
                                <td>{{ $user->username }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>:</td>
                                <td>{{ $user->jabatan }}</td>
                            </tr>
                        @endif
                        <tbody>
                            @foreach ($data2 as $guru)
                                @if ($user->level == 'guru')
                                    @if ($guru->nip == $user->username)
                                        <tr>
                                            <th>NIP</th>
                                        <td>:</td>
                                        <td>{{ Auth::user()->username }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama</th>
                                            <td>:</td>
                                            <td>{{ $guru->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir</th>
                                            <td>:</td>
                                            <td>{{ $guru->tgllahir }}</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <td>:</td>
                                            <td>{{ $guru->jk }}</td>
                                        </tr>
                                        <tr>
                                            <th>No Telepon</th>
                                            <td>:</td>
                                            <td>{{ $guru->no_hp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>:</td>
                                            <td>{{ $guru->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>:</td>
                                            <td>{{ $guru->address }}</td>
                                        </tr>
                                    @endif
                                @endif
                            @endforeach
                            @foreach ($data as $siswa)
                                @if ($user->level == 'siswa')
                                    @if ($siswa->nisn == $user->username)
                                        <tr>
                                            <th>NISN</th>
                                            <td>:</td>
                                            <td>{{ Auth::user()->username }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama</th>
                                            <td>:</td>
                                            <td>{{ $siswa->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir</th>
                                            <td>:</td>
                                            <td>{{ $siswa->tgllahir }}</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <td>:</td>
                                            <td>{{ $siswa->jk }}</td>
                                        </tr>
                                        <tr>
                                            <th>No Telepon</th>
                                            <td>:</td>
                                            <td>{{ $siswa->no_hp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>:</td>
                                            <td>{{ $siswa->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>:</td>
                                            <td>{{ $siswa->address }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>:</td>
                                            <td>{{ $siswa->jabatan }}</td>
                                        </tr>
                                    @endif
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    {{-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ubahData">Ubah Data</a> --}}
                    @if ($user->level == 'admin')
                        <a href="{{ url('admin/auth/edit') }}{{ '/'.$user->username }}" class="btn btn-primary">Ubah Data</a>
                    @endif
                    @if ($user->level == 'guru')
                        <a href="{{ url('guru/auth/edit') }}{{ '/'.$user->username }}" class="btn btn-primary">Ubah Data</a>
                    @endif
                    @if ($user->level == 'siswa')
                        <a href="{{ url('siswa/auth/edit') }}{{ '/'.$user->username }}" class="btn btn-primary">Ubah Data</a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin untuk Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="{{ url('logout') }}">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/frontend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/frontend/vendor/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/frontend/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/frontend/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/demo/chart-pie-demo.js') }}"></script>

    @yield('js_tambahan')
</body>
</html>
