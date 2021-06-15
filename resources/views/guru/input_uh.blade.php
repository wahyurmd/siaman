@extends('master')

@section('content')

<div class="container-fluid">
    <i class="fas fa-file-alt"></i><span style="font-size: large;"> Input Nilai Ulangan Harian</span>
    <br>
    <br>

    <div class="row">
        <div class="col-lg-4">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Semester</label>
                    <select class="form-control" name="" id="">
                        <option disabled selected>Semester</option>
                        <option value="Ganjil">Ganjil</option>
                        <option value="Genap">Genap</option>
                    </select>
                    <br>
                    <label for="exampleInputEmail1">Mata Pelajaran</label>
                    <select class="form-control" name="" id="">
                        <option disabled selected>Mata Pelajaran</option>
                        <option value="Al -Qur'an Hadits">Al -Qur'an Hadits</option>
                        <option value="Fiqih">Fiqih</option>
                        <option value="Akidah Akhlak">Akidah Akhlak</option>
                    </select>
                    <br>
                    <label for="exampleInputEmail1">Kelas</label>
                    <select class="form-control" name="" id="">
                        <option disabled selected>Kelas</option>
                        <option value="X MIPA 1">X MIPA 1</option>
                        <option value="X MIPA 2">X MIPA 2</option>
                        <option value="X MIPA 3">X MIPA 3</option>
                    </select>
                    <br>
                    <label for="exampleInputEmail1">Minggu</label>
                    <select class="form-control" name="" id="">
                        <option disabled selected>Minggu Ke</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Input</button>
            </form>
        </div>
    </div>
</div>

@endsection