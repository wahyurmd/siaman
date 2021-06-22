@extends('master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-0 text-gray-800">Kehadiran Saya</h1>
        <br>
        <div class="row justify-content-center">
            <div class="form-group">
                <form action="{{ url('siswa/absensi') }}">
                    <label>Silahkan Pilih Tanggal</label>
                    <table>
                        <tr>
                            <th>
                                <input type="date" style="width: 10cm;" class="form-control" name="pilih_tgl">
                            </th>
                            <th>&ensp;</th>
                            <th><button type="submit" style="width: 3cm" class="btn btn-primary">Cari Data</button></th>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="center">
                <h5>{{ Auth::user()->name }}</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Pertemuan</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($absensi as $row)
                        @if ($row->tanggal == $tanggal_input)
                            <tbody>
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    <td>{{ $row->mapel }}</td>
                                    <td>{{ $row->pertemuan }}</td>
                                    <td>{{ $row->kehadiran }}</td>
                                </tr>
                            </tbody>
                        @endif 
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection