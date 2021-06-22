@extends('master')

@section('content')
<div class="container-fluid">
    <div class="col">
        @if (session('sukses'))
        <div class="alert alert-success alert-dismissible fade show align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            {{ session('sukses') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <h2 class="text-center">Input Jadwal Pelajaran</h2>
        <div class="table-responsive input-laporan">
            <form action="{{ url('admin/input-jadwal/') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Kelas</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="pilih_kelas" required>
                                <option selected disabled>Pilih Kelas</option>
                                @foreach ($kelas as $tampil)
                                    <option value="{{ $tampil->id_kelas }}">{{ $tampil->kelas }} {{ $tampil->jurusan }}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Hari</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="pilih_hari" required>
                                <option selected disabled>Pilih Hari</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Pilih</button>
            </form>
            <form action="{{ url('admin/input-jadwal/proses') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group mt-5">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Kelas</label>
                        </div>
                        <div class="col-md-10">
                            @foreach ($kelas_input as $row)
                                <input type="text" class="form-control" value="{{ $row->kelas }} {{ $row->jurusan }}" readonly>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Hari</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $hari_input }}" readonly>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Mata Pelajaran</th>
                            <th>Jam Mulai</th>
                            <th>Jam Akhir</th>
                            <th class="text-center"><a href="#" class="addRow"><i class="fas fa-plus-square fa-lg"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select class="form-control" name="id_mapel[]">
                                    <option selected disabled>Pilih Mata Pelajaran</option>
                                    @foreach ($mapel as $tampil)
                                        <option value="{{ $tampil->id_mapel }}">{{ $tampil->mapel }} - {{ $tampil->nama }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="id_kelas[]" value="{{ $id_kelas_input }}">
                                <input type="hidden" name="hari[]" value="{{ $hari_input }}">
                            </td>
                            <td>
                                <input class="form-control" name="jam_mulai[]" type="time">
                            </td>
                            <td>
                                <input class="form-control" name="jam_akhir[]" type="time">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary btn-block">Tambah Jadwal</button> <br>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js_tambahan')
    <script>
        $(document).ready(function() {
            $('.addRow').on('click', function() {
                addRow();
            });
            function addRow() {
                var tr = '<tr>' +
                '<td><select class="form-control" name="id_mapel[]"><option selected disabled>Pilih Mata Pelajaran</option>@foreach ($mapel as $tampil)<option value="{{ $tampil->id_mapel }}">{{ $tampil->mapel }} - {{ $tampil->nama }}</option>@endforeach</select><input type="hidden" name="id_kelas[]" value="{{ $id_kelas_input }}"><input type="hidden" name="hari[]" value="{{ $hari_input }}"></td>' +
                '<td><input class="form-control" name="jam_mulai[]" type="time"></td>' +
                '<td><input class="form-control" name="jam_akhir[]" type="time"></td>' +
                '<td class="text-center"><a href="#" class="removeRow"><i class="fas fa-minus-square fa-lg"></i></a></td>' +
                '</tr>'
                $('tbody').append(tr);
            };
            $('tbody').on('click', '.removeRow', function() {
                $(this).parent().parent().remove();
            });
        });
        
    </script>
@endsection