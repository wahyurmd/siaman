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
    <h2 class="text-center">Absensi Siswa</h2>
    <div class="input-laporan mt-3">
        <div class="col">
            <form action="absensi-siswa">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="exampleInputEmail1">Kelas</label>
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
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <label for="exampleInputEmail1">Mata Pelajaran</label>
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
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <label for="exampleInputEmail1">Tanggal</label>
                        </div>
                        <div class="col-md-10">
                            <input class="form-control" name="pilih_tgl" type="date">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <label>Pertemuan</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="pilih_pertemuan" required>
                                <option disabled selected>Pertemuan</option>
                                <option value="Pertemuan 1">Pertemuan 1</option>
                                <option value="Pertemuan 2">Pertemuan 2</option>
                                <option value="Pertemuan 3">Pertemuan 3</option>
                                <option value="Pertemuan 4">Pertemuan 4</option>
                                <option value="Pertemuan 5">Pertemuan 5</option>
                                <option value="Pertemuan 6">Pertemuan 6</option>
                                <option value="Pertemuan 7">Pertemuan 7</option>
                                <option value="Pertemuan 8">Pertemuan 8</option>
                                <option value="Pertemuan 9">Pertemuan 9</option>
                                <option value="Pertemuan 10">Pertemuan 10</option>
                                <option value="Pertemuan 11">Pertemuan 11</option>
                                <option value="Pertemuan 12">Pertemuan 12</option>
                                <option value="Pertemuan 13">Pertemuan 13</option>
                                <option value="Pertemuan 14">Pertemuan 14</option>
                                <option value="Pertemuan 15">Pertemuan 15</option>
                                <option value="Pertemuan 16">Pertemuan 16</option>
                                <option value="Pertemuan 17">Pertemuan 17</option>
                                <option value="Pertemuan 18">Pertemuan 18</option>
                                <option value="Pertemuan 19">Pertemuan 19</option>
                                <option value="Pertemuan 20">Pertemuan 20</option>
                                <option value="Pertemuan 21">Pertemuan 21</option>
                                <option value="Pertemuan 22">Pertemuan 22</option>
                                <option value="Pertemuan 23">Pertemuan 23</option>
                                <option value="Pertemuan 24">Pertemuan 24</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Pilih</button>
            </form>
        </div>
        <form action="{{ url('guru/absensi-siswa/proses') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group" style="background-color: white; margin-top:10px; margin-bottom: 10px; padding:10px; border:solid 1px;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Kehadiran</th>
                        </tr>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($siswa as $row)
                    <tbody>
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                {{ $row->nama }}
                                <input type="hidden" name="nisn[]" class="form-control" value="{{ $row->nisn }}" readonly></td>
                                <input type="hidden" name="id_kelas[]" class="form-control" value="{{ $row->id_kelas }}" readonly></td>
                                <input type="hidden" name="id_mapel[]" class="form-control" value="{{ $mapel_table1->id_mapel }}" readonly>
                                <input type="hidden" name="tanggal[]" class="form-control" value="{{ $tgl_input }}" readonly>
                                <input type="hidden" name="pertemuan[]" class="form-control" value="{{ $pertemuan_input }}" readonly>
                            </td>
                            <td>
                                <div class="row ml-2">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="kehadiran[]{{ $row->nisn }}" value="Hadir">
                                        <label class="form-check-label" for="flexRadioDefault1">Hadir</label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="kehadiran[]{{ $row->nisn }}" value="Sakit">
                                        <label class="form-check-label" for="flexRadioDefault1">Sakit</label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="kehadiran[]{{ $row->nisn }}" value="Izin">
                                        <label class="form-check-label" for="flexRadioDefault1">Izin</label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="kehadiran[]{{ $row->nisn }}" value="Alfa">
                                        <label class="form-check-label" for="flexRadioDefault1">Alfa</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <button type="submit" class="btn btn-danger btn-block">Input Absen</button> <br>
        </form>
    </div>
</div>
@endsection