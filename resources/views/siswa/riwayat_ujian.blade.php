@extends('master')

@section('content')

<div class="container-fluid">
    <i class="fas fa-lg fa-history"> </i><span style="font-size: large;"> Riwayat Ujian</span>
    <br>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Kelas</th>
            <th scope="col">Hari/Tanggal</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Biologi</td>
            <td>XII IPA 1</td>
            <td>25/04/2021</td>
            <td>Selesai</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Bahasa Arab</td>
            <td>XII IPA 1</td>
            <td>27/04/2021</td>
            <td>Selesai</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Fiqih</td>
            <td>XII IPA 1</td>
            <td>28/04/2021</td>
            <td>Selesai</td>
          </tr>
        </tbody>
    </table>
</div>

@endsection