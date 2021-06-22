@extends('master')

@section('content')

<div class="container-fluid">
    <i class="far fa-lg fa-clipboard"></i><span style="font-size: large;"> Jadwal Pelajaran</span>
    <br>

    <div class="mt-4 col">
        @if (Auth::user()->jabatan == "Siswa")
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
                    <th>Mata Pelajaran</th>
                    <th>Hari</th>
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
                    @if ($jadwal->id_kelas == $jadwal->id_kelas)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $jadwal->mapel }}</td>
                            <td>{{ $jadwal->hari }}</td>
                            <td>{{ $jadwal->jam_mulai }} - {{ $jadwal->jam_akhir }}</td>
                            <td>{{ $jadwal->nama }}</td>
                            <td>{{ $jadwal->kelas }} {{ $jadwal->jurusan }}</td>
                        </tr>
                    @endif
                </tbody>
            @endforeach
        </table>
        @endif

        {{-- Tampilan untuk admin --}}
        @if (Auth::user()->jabatan != 'Siswa')
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <th>Hari</th>
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
                        <td>{{ $jadwal->mapel }}</td>
                        <td>{{ $jadwal->hari }}</td>
                        <td>{{ $jadwal->jam_mulai }} - {{ $jadwal->jam_akhir }}</td>
                        <td>{{ $jadwal->nama }}</td>
                        <td>{{ $jadwal->kelas }} {{ $jadwal->jurusan }}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        @endif
    </div>
</div>

@endsection