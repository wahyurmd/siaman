@extends('master')

@section('content')

<div class="container-fluid">
    <i class="fas fa-file-alt"></i><span style="font-size: large;"> Ujian Tengah Semester</span>
    <br>
    <div class="row">
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
    </div>
    <div class="wrapper-table" style="overflow-x: auto;">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">KKM</th>
                    <th scope="col">Pengetahuan</th>
                    <th scope="col">Keterampilan</th>
                    <th scope="col">Sikap, Sosial, Spiritual</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Al -Qur'an Hadits</td>
                    <td>80</td>
                    <td>87</td>
                    <td>85</td>
                    <td>Sangat Baik</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Fiqih</td>
                    <td>80</td>
                    <td>85</td>
                    <td>84</td>
                    <td>Sangat Baik</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Akidah Akhlak</td>
                    <td>80</td>
                    <td>84</td>
                    <td>80</td>
                    <td>Baik</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Sejarah Kebudayaan Islam</td>
                    <td>80</td>
                    <td>87</td>
                    <td>92</td>
                    <td>Sangat Baik</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Pendidikan Kewarganegaraan</td>
                    <td>80</td>
                    <td>90</td>
                    <td></td>
                    <td>Sangat Baik</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection