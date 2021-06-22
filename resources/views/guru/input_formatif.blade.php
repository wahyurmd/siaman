@extends('master')

@section('content')

<div class="container-fluid">
    @if (session('sukses'))
    <div class="alert alert-success alert-dismissible fade show align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </svg>
        {{ session('sukses') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <i class="fas fa-file-alt"></i><span style="font-size: large;"> Input Nilai Formatif</span>
    <br>
    <br>

    <div class="row">
        <div class="col">
            <form action="input_formatif" method="">
                <div class="form-group">
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="exampleInputEmail1">Pilih Mata Pelajaran</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="pilih_mapel" id="mapel" required>
                                <option disabled selected>Mata Pelajaran</option>
                                @foreach ($pelajaran as $mapel)
                                    <option value="{{ $mapel->id_mapel }}">{{ $mapel->mapel }} - {{ $mapel->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="exampleInputEmail1">Pilih Semester</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="pilih_semester" id="semester" required>
                                <option disabled selected>Pilih</option>
                                @foreach ($smt as $row)
                                    <option value="{{ $row->id }}">{{ $row->semester }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="exampleInputEmail1">Pilih Kelas</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="pilih_kelas" id="dropselect" required>
                                <option disabled selected>Kelas</option>
                                @foreach ($tampil_kelas as $row)
                                    <option value="{{ $row->id_kelas }}">{{ $row->kelas }} {{ $row->jurusan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
            <hr>
            <div>
                <div class="row mb-3">
                    @foreach ($mapel_table as $mapel_table)
                    <div class="col-md-2">
                        <label for="exampleInputEmail1">Mata Pelajaran</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" value="{{ $mapel_table->mapel }}" readonly>
                    </div>
                    @endforeach
                </div>
                <div class="row mb-3">
                    @foreach ($semester_table as $semester_table)
                    <div class="col-md-2">
                        <label for="exampleInputEmail1">Semester</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" value="{{ $semester_table->semester }}" readonly>
                    </div>
                    @endforeach
                </div>
                <div class="row mb-3">
                    @foreach ($kelas_table as $kelas_table)
                    <div class="col-md-2">
                        <label for="exampleInputEmail1">Kelas</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" value="{{ $kelas_table->kelas }} {{ $kelas_table->jurusan }}" readonly>
                    </div>
                    @endforeach
                </div>
                <form action="{{ url('guru/input_formatif/proses') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th style="min-width: 190px">Nama</th>
                                <th>Kompentensi Dasar</th>
                            </thead>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($output as $item)
                                <tbody>
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <td style="min-width: 190px">
                                            {{ $item->nama }}
                                            <input type="hidden" name="nisn[]" class="form-control" value="{{ $item->nisn }}" readonly></td>
                                        <td>
                                            <input type="number" name="nilai[]" step="any" class="form-control" value="0">
                                            <input type="hidden" name="id_mapel[]" class="form-control" value="{{ $mapel_table1->id_mapel }}" readonly>
                                            <input type="hidden" name="id_semester[]" class="form-control" value="{{ $semester_table1->id }}" readonly>
                                            <input type="hidden" name="id_kelas[]" class="form-control" value="{{ $kelas_table1->id_kelas }}" readonly>
                                            <input type="hidden" name="keterangan[]" class="form-control" value="formatif" readonly>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <button type="submit" class="btn btn-success">Input</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
