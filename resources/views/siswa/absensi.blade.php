@extends('master')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800">Kehadiran Saya</h1>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Silahkan Pilih Tanggal</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-primary">Cari Data</button>
            </form>
        </div>
        <div class="col-lg-8">
            <h5 style="padding-top: 5%;">Awiez Fathwa Zein | XII IPA 1</h5>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>IPA</td>
                    <td>Hadir</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Akidah Akhlak</td>
                    <td>Izin</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Penjaskes</td>
                    <td>Alfa</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection