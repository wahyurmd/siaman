@extends('master')

@section('content')

<div class="container-fluid">
    <i class="fas fa-file-alt"></i><span style="font-size: large;"> Ujian Tengah Semester</span>
    <br>
    <div class="wrapper-table mt-5" style="overflow-x: auto;">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th class="text-center" scope="col">KKM</th>
                    <th class="text-center" scope="col">Kompetensi Dasar</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            @foreach ($nilai as $row)
                <tbody>
                    @if ($row->nisn == Auth::user()->username)
                        @if ($row->keterangan == 'uts')
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $row->mapel }}</td>
                                <td class="text-center">{{ $row->kkm }}</td>
                                <td class="text-center">{{ $row->nilai }}</td>
                                <td>
                                    @if ($row->nilai >= 90 && $row->nilai <= 100)
                                        {{ "Sangat Baik" }}
                                    @elseif ($row->nilai >= 80 && $row->nilai < 90)
                                        {{ "Baik" }}
                                    @elseif ($row->nilai >= 70 && $row->nilai < 80)
                                        {{ "Cukup" }}
                                    @elseif ($row->nilai < 70)
                                        {{ "Kurang" }}
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endif
                </tbody>
            @endforeach
        </table>
    </div>
</div>

@endsection