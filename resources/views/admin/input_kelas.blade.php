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
    <h2 class="text-center">Input Kelas Siswa</h2>
    <div class="input-laporan">
        <form action="{{ url('admin/input-kelas/proses') }}" method="POST">
            {{ csrf_field() }}
            <table class="table tabled-bordered mt-5">
                <thead>
                    <th>Siswa</th>
                    <th>Kelas</th>
                    <th class="text-center"><a href="#" class="addRow"><i class="fas fa-plus-square fa-lg"></i></a></th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select class="form-control" name="nisn[]">
                                <option selected disabled>Pilih Siswa</option>
                                @foreach ($siswa_get as $tampil)
                                    <option value="{{ $tampil->nisn }}">{{ $tampil->nama }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="id_kelas[]">
                                <option selected disabled>Pilih Kelas</option>
                                @foreach ($kelas_get as $tampil)
                                    <option value="{{ $tampil->id_kelas }}">{{ $tampil->kelas }} {{ $tampil->jurusan }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-danger btn-block">Tambah Kelas Siswa</button> <br>
        </form>
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
                '<td><select class="form-control" name="nisn[]"><option selected disabled>Pilih Siswa</option>@foreach ($siswa_get as $tampil)<option value="{{ $tampil->nisn }}">{{ $tampil->nama }}</option>@endforeach</select></td>' +
                '<td><select class="form-control" name="id_kelas[]"><option selected disabled>Pilih Kelas</option>@foreach ($kelas_get as $tampil)<option value="{{ $tampil->id_kelas }}">{{ $tampil->kelas }} {{ $tampil->jurusan }}</option>@endforeach</select></td>' +
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