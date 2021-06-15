@extends('master')

@section('content')
<div class="container-fluid">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-5 col-md-5">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Ubah Data</h6>
                </div>
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="p-5">
                                {{-- <h1 class="text-center mb-5"><b>Ubah Data</b></h1> --}}
                                @if (session('sukses'))
                                    <div class="alert alert-success alert-dismissible fade show align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                        </svg>
                                        {{ session('sukses') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                @if (Auth::user())
                                    <form action="{{ url('auth/proses-edit') }}" class="user" method="POST">
                                        {{ csrf_field() }}
                                        <table width="100%">
                                            @if (Auth::user()->level == 'admin')
                                                <input type="hidden" name="username" class="form-control" value="{{ $user->username }}">
                                                <input type="hidden" name="level" class="form-control" value="{{ $user->level }}">
                                                <tr>
                                                    <th>Nama Lengkap</th>
                                                    <td>:</td>
                                                    <td>{{ Auth::user()->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>NIP</th>
                                                    <td>:</td>
                                                    <td>{{ Auth::user()->username }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>:</td>
                                                    <td><input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}"></td>
                                                </tr>
                                            @endif
                                            @foreach ($data2 as $row)
                                                @if (Auth::user()->level == 'guru')
                                                    <input type="hidden" name="nip" class="form-control" value="{{ $row->nip }}">
                                                    <input type="hidden" name="level" class="form-control" value="{{ $user->level }}">
                                                    <tr>
                                                        <th>Nama Lengkap</th>
                                                        <td>:</td>
                                                        <td>{{ $row->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>NIP</th>
                                                        <td>:</td>
                                                        <td>{{ $row->username }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal Lahir</th>
                                                        <td>:</td>
                                                        <td><input type="date" name="tgl_lahir" class="form-control" value="{{ $row->tgllahir }}"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jenis Kelamin</th>
                                                        <td>:</td>
                                                        <td>
                                                            <select name="jenis_kelamin" class="form-control">
                                                                @if ($row->jk == 'Laki-laki')
                                                                    <option disabled>Pilih Jenis Kelamin</option>
                                                                    <option value="Laki-laki" selected>Laki-laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                @endif
                                                                @if ($row->jk == 'Perempuan')
                                                                    <option disabled>Pilih Jenis Kelamin</option>
                                                                    <option value="Laki-laki">Laki-laki</option>
                                                                    <option value="Perempuan" selected>Perempuan</option>
                                                                @endif
                                                                @if ($row->jk == '')
                                                                <option selected disabled>Pilih Jenis Kelamin</option>
                                                                <option value="Laki-laki">Laki-laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                                @endif
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>No Telepon</th>
                                                        <td>:</td>
                                                        <td><input type="text" name="no_telp" class="form-control" value="{{ $row->no_hp }}"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>:</td>
                                                        <td><input type="email" name="email" class="form-control" value="{{ $row->email }}"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Alamat</th>
                                                        <td>:</td>
                                                        <td><textarea name="alamat" class="form-control" cols="30" rows="3">{{ $row->address }}</textarea></td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                            @foreach ($data as $row)
                                                @if (Auth::user()->level == 'siswa')
                                                    <input type="hidden" name="nisn" class="form-control" value="{{ $row->nisn }}">
                                                    <input type="hidden" name="level" class="form-control" value="{{ $user->level }}">
                                                    <tr>
                                                        <th>Nama Lengkap</th>
                                                        <td>:</td>
                                                        <td>{{ $row->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>NISN</th>
                                                        <td>:</td>
                                                        <td>{{ $row->username }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal Lahir</th>
                                                        <td>:</td>
                                                        <td><input type="date" name="tgl_lahir" class="form-control" value="{{ $row->tgllahir }}"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jenis Kelamin</th>
                                                        <td>:</td>
                                                        <td>
                                                            <select name="jenis_kelamin" class="form-control">
                                                                @if ($row->jk == 'Laki-laki')
                                                                    <option disabled>Pilih Jenis Kelamin</option>
                                                                    <option value="Laki-laki" selected>Laki-laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                @endif
                                                                @if ($row->jk == 'Perempuan')
                                                                    <option disabled>Pilih Jenis Kelamin</option>
                                                                    <option value="Laki-laki">Laki-laki</option>
                                                                    <option value="Perempuan" selected>Perempuan</option>
                                                                @endif
                                                                @if ($row->jk == '')
                                                                <option selected disabled>Pilih Jenis Kelamin</option>
                                                                <option value="Laki-laki">Laki-laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                                @endif
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>No Telepon</th>
                                                        <td>:</td>
                                                        <td><input type="text" name="no_telp" class="form-control" value="{{ $row->no_hp }}"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>:</td>
                                                        <td><input type="email" name="email" class="form-control" value="{{ $row->email }}"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Alamat</th>
                                                        <td>:</td>
                                                        <td><textarea name="alamat" class="form-control" cols="30" rows="3">{{ $row->address }}</textarea></td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </table>
                                        <button type="submit" class="btn btn-login btn-primary btn-block mt-5">Ubah Data</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection