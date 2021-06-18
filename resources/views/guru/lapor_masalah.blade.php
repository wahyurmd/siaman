@extends('master')

@section('css_jss_tambahan')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endsection

@section('content')

<div class="container-fluid">
    <h2 class="text-center"><b>Buat Laporan Siswa Bermasalah</b></h2>
    @if (session('sukses'))
        <div class=" mr-5 ml-5 alert alert-success alert-dismissible fade show align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            {{ session('sukses') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="input-laporan mr-5 ml-5 mt-5">
        <form action="{{ url('guru/lapor_masalah/tambah-proses') }}" method="POST">
            {{ csrf_field() }}
            <h4>Data Guru Pelapor</h4>
            <div class="form-group">
                <label for="namaPelapor">Nama</label>
                <input class="form-control" id="namaPelapor" type="text" value="{{ Auth::user()->name }}" readonly>
                <input class="form-control" name="nip" id="namaPelapor" type="hidden" value="{{ Auth::user()->username }}" readonly>
            </div>
            <h4>Data Siswa Bermasalah</h4>
            <div class="form-group mt-5">
                <div class="input-field">
                    <label for="Nama">Nama</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Siswa" id="nama_siswa" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label for="Nama">NISN</label>
                <input type="text" name="nisn" class="form-control" placeholder="NISN" id="nisn" readonly>
            </div>
            <div class="form-group">
                <label for="kelasSiswa">Kelas</label>
                <input type="text" id="kelas" class="form-control" placeholder="Kelas" readonly>
                <input type="hidden" name="id_kelas" id="id_kelas" class="form-control" placeholder="Kelas" readonly>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Jurusan</label>
                <input type="text" class="form-control" placeholder="Jurusan" id="jurusan" readonly>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Kronologi Kejadian</label>
                <textarea class="form-control" name="kronologi" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-danger btn-block">Buat Laporan</button> <br>
        </form>
    </div>
</div>

@endsection

@section('js_tambahan')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            type: 'get',
            url: '{!! URL::to('searchautocomplete') !!}',
            success:function(response) {
                // console.log(response);
                // material css
                
                var sisArray = response;
                var dataSis = {};
                var dataSis2 = {};
                for (var i = 0; i < sisArray.length; i++) {
                    dataSis[sisArray[i].nama] = null;
                    dataSis2[sisArray[i].nama] = sisArray[i];
                }
                // console.log("dataSiswa");
                // console.log(dataSis);
                // console.log(dataSis2);

                $('input#nama_siswa').autocomplete({
                    data: dataSis,
                    onAutocomplete: function(reqdata) {
                        // console.log(reqdata);
                        $('#nisn').val(dataSis2[reqdata]['nisn']);
                        $('#kelas').val(dataSis2[reqdata]['kelas']);
                        $('#id_kelas').val(dataSis2[reqdata]['id_kelas']);
                        $('#jurusan').val(dataSis2[reqdata]['jurusan']);
                    }
                });
                // end material css
            }
        })
    });
</script>
@endsection