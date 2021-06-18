@extends('master')

@section('content')

<div class="container-fluid table-responsive">
    <h2>Daftar Laporan Siswa Bermasalah</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Terlapor</th>
                <th scope="col" class="text-center">Kronologi</th>
                <th scope="col" class="text-center">Status</th>
                @if (Auth::user()->jabatan == 'BK')
                    <th scope="col" class="text-center">Aksi</th>
                @endif
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
                        @if (Auth::user()->jabatan == 'BK')
                            <td class="text-center">
                                    <div class="row">
                                        <div class="col">
                                            <select name="status" id="status" class="custom-select">
                                                @if ($row->status == '0')
                                                    <option value="0" selected>Batal</option>
                                                    <option value="2">Penanganan</option>
                                                    <option value="1">Selesai</option>
                                                @endif
                                                @if ($row->status == '2')
                                                    <option value="0">Batal</option>
                                                    <option value="2" selected>Penanganan</option>
                                                    <option value="1">Selesai</option>
                                                @endif
                                                @if ($row->status == '1')
                                                    <option value="0">Batal</option>
                                                    <option value="2">Penanganan</option>
                                                    <option value="1" selected>Selesai</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary btn-cilik">Update</button>
                                        </div>
                                    </div>
                            </td>
                        @endif
                    </form>
                </tr>
            </tbody>
        @endforeach
    </table>
</div>

@endsection