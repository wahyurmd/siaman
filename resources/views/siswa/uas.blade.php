@extends('master')

@section('content')

<div class="container-fluid">
    <i class="fas fa-file-alt"></i><span style="font-size: large;"> Nilai Ujian Akhir Semester</span>
    <br>
    {{-- <div class="row">
        <div class="col-lg-4">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Silahkan Pilih Kelas</label>
                    <select class="form-control" name="" id="">
                        <option disabled selected value="X">Pilih Kelas</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                    <br>
                    <label for="exampleInputEmail1">Silahkan Pilih Semester</label>
                    <select class="form-control" name="" id="">
                        <option value="Semester Ganjil">Semester Ganjil</option>
                        <option value="Semester Genap">Semester Genap</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Cari Data</button>
            </form>
        </div>
    </div> --}}
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
                        @if ($row->keterangan == 'uas')
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $row->mapel }}</td>
                                <td class="text-center">75</td>
                                <td class="text-center">{{ $row->nilai }}</td>
                                <td>
                                    @if ($row->nilai > 90 && $row->nilai == 100)
                                    {{ "Sangat Baik" }}
                                    @endif
                                    @if ($row->nilai > 80 && $row->nilai == 90)
                                        {{ "Baik" }}
                                    @endif
                                    @if ($row->nilai > 70 && $row->nilai == 80)
                                        {{ "Cukup" }}
                                    @endif
                                    @if ($row->nilai <= 75)
                                        {{ "Anda Bodoh Sekali" }}
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