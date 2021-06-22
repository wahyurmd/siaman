@extends('master')

@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    {{-- <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kehadiran
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Content Row -->

    <div class="row">

        <!-- TAMPILAN BUAT GURU -->
        @if (Auth::user()->level != 'siswa')
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Progress Laporan</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">ID</th>
                                <th scope="col">Terlapor</th>
                                <th scope="col">Kronologi</th>
                                <th scope="col" class="text-center">Status</th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($laporan as $row)
                            <tbody>
                                <tr>
                                    <form action="{{ url('guru/daftar_laporan/update-status') }}{{ '/'.$row->id_laporan }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id_laporan" id="id_laporan" value="{{ $row->id_laporan }}">
                                        <th class="text-center" scope="row">{{ $no++ }}</th>
                                        <td>{{ $row->nama_siswa }}</td>
                                        <td>{{ $row->kronologi }}</td>
                                        <td class="text-center">
                                            @if ($row->status == '0')
                                                <span class="badge bg-danger" style="min-width: 150px">Menunggu Penanganan</span>
                                            @endif
                                            @if ($row->status == '2')
                                                <div class="badge bg-info" style="min-width: 150px">Dalam Penanganan BP</div>
                                            @endif
                                            @if ($row->status == '1')
                                                <div class="badge bg-success" style="min-width: 150px">Selesai</div>
                                            @endif
                                        </td>
                                    </form>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        @endif

        <!-- TAMPILAN BUAT SISWA -->
        @if (Auth::user()->level == 'siswa')
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Progress Laporan</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="mb-2">
                        <tr>
                            <td style="min-width: 100px">Nama Siswa</td>
                            <td>:</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td style="min-width: 100px">NISN</td>
                            <td>:</td>
                            <td>{{ Auth::user()->username }}</td>
                        </tr>
                    </table>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Hari</th>
                                <th>Mata Pelajaran</th>
                                <th>Jam</th>
                                <th>Guru</th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($jadwal as $jadwal)
                            <tbody>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $jadwal->hari }}</td>
                                    <td>{{ $jadwal->mapel }}</td>
                                    <td>{{ $jadwal->jam_mulai }} - {{ $jadwal->jam_akhir }}</td>
                                    <td>{{ $jadwal->nama }}</td>
                                    <td>{{ $jadwal->kelas }} {{ $jadwal->jurusan }}</td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        @endif
    </div>

</div>
<!-- /.container-fluid -->

@endsection