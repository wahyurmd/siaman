@extends('master')

@section('css_jss_tambahan')
    <style>
        .data {
            display: none;
        }
    </style>
@endsection

@section('content')

<div class="container-fluid">
    <i class="fas fa-file-alt"></i><span style="font-size: large;"> Input Nilai Ulangan Tengah Semester</span>
    <br>
    <br>

    <div class="row">
        <form action="input_uts" method="">
            <div class="col">
                <div class="form-group">
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="exampleInputEmail1">Mata Pelajaran</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="mapel" id="mapel">
                                <option disabled selected>Mata Pelajaran</option>
                                @foreach ($pelajaran as $mapel)
                                    <option value="{{ $mapel->id_mapel }}">{{ $mapel->mapel }} - {{ $mapel->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="exampleInputEmail1">Semester</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="semester" id="semester">
                                <option disabled selected>Pilih</option>
                                <option value="Ganjil">Ganjil</option>
                                <option value="Genap">Genap</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="exampleInputEmail1">Kelas</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="kelas" id="dropselect">
                                <option disabled selected>Kelas</option>
                                @foreach ($tampil_kelas as $row)
                                    <option value="{{ $row->id_kelas }}">{{ $row->kelas }} {{ $row->jurusan }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" class="form-control" name="keterangan" value="uts">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>
        {{$mapel_input}}
        <br>
        {{$semester_input}}
        <br>
        {{$kelas_input}}
        <br>
        {{$mapel_table->mapel}}
        <input type="text" value="{{$mapel_table->mapel}}">
        <br><br>
        <form action="">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Kompentensi Dasar</th>
            </thead>
            @php
                $no=1;
            @endphp
            @foreach ($output as $item)
            <tbody>
                <tr>
                    <th>{{ $no++ }}</th>
                    <td>{{ $item->nama }}</td>
                    <td><input type="number" name="nilai" class="form-control" value=""></td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <button type="submit" class="btn btn-primary">Input</button>
        </form>
    </div>
</div>

@endsection

{{-- @section('js_tambahan')
    <script>
        $(document).ready(function() {
            console.log("haii");
            $("#dropselect").on('change', function() {
                console.log($(this).val());
                $(".data").hide();
                $("#" + $(this).val()).fadeIn(700);
            }).change();
        });
    </script>
@endsection --}}
