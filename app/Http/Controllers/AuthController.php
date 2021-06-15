<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->level == 'admin') {
                return redirect()->route('admin/dashboard');
            } elseif (Auth::user()->level == 'guru') {
                return redirect()->route('guru/dashboard');
            } elseif (Auth::user()->level == 'siswa') {
                return redirect()->route('siswa/dashboard');
            }
        }
        return view('auth/login');
    }

    public function proses_login(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        # Variabel untuk menampung username dan password dari form login
        $kredensial = $request->only('username','password');
        $user = Auth::user();

        DB::table('users')->where('username', $request->username)->update([
            'last_login' => Carbon::now()->toDateTimeString()
        ]);

        if (Auth::attempt($kredensial)) {
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->intended('admin/dashboard');
            } elseif ($user->level == 'guru') {
                return redirect()->intended('guru/dashboard');
            } elseif ($user->level == 'siswa') {
                return redirect()->intended('siswa/dashboard');
            }
            return redirect('login');
        }
        return redirect('login')->with('gagal_login','NISN/NIP atau Kata Sandi salah!');
    }

    public function daftar_akun()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        return view('auth/register', ['user' => $user, 'data' => $data, 'data2' => $data2]);
    }

    public function daftar_akun_siswa()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        return view('auth/register_siswa', ['user' => $user, 'data' => $data, 'data2' => $data2]);
    }

    public function proses_registrasi(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        DB::table('users')->insert([
            'name'      => $request->name,
            'username'  => $request->username,
            'password'  => bcrypt($request->password),
            'level'     => $request->level,
            'jabatan'   => $request->jabatan,
            'created_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('guru')->insert([
            'nip'   => $request->username,
            'nama'  => $request->name,
            'created_at'=> Carbon::now()->toDateTimeString()
        ]);

        return redirect('admin/registrasi')->with('sukses','Registrasi berhasil');
    }

    public function proses_registrasi_siswa(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        DB::table('users')->insert([
            'name'      => $request->name,
            'name'      => $request->name_siswa, #buat siswa
            'username'  => $request->username,
            'username'  => $request->nisn, #buat siswa
            'password'  => bcrypt($request->password),
            'level'     => $request->level,
            'jabatan'   => $request->jabatan,
            'created_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('siswa')->insert([
            'nisn'   => $request->nisn,
            'nama'  => $request->name_siswa,
            'created_at'=> Carbon::now()->toDateTimeString()
        ]);

        return redirect('admin/registrasi-siswa')->with('sukses','Registrasi berhasil');
    }

    public function edit_akun($username)
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')
        ->where('users.username', $username)
        ->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')
        ->where('users.username', $username)
        ->get();

        return view('auth/edit', ['user' => $user, 'data' => $data, 'data2' => $data2]);
    }

    public function proses_update(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        DB::table('users')->where('username', $request->username)->update([
            'email'         => $request->email,
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);

        DB::table('guru')->where('nip', $request->nip)->update([
            'tgl_lahir'     => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telp'       => $request->no_telp,
            'alamat'        => $request->alamat,
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);

        DB::table('siswa')->where('nisn', $request->nisn)->update([
            'tgl_lahir'     => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telp'       => $request->no_telp,
            'alamat'        => $request->alamat,
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);

        DB::table('users')->where('username', $request->nip)->update([
            'email'         => $request->email,
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);

        DB::table('users')->where('username', $request->nisn)->update([
            'email'         => $request->email,
            'updated_at'    => Carbon::now()->toDateTimeString()
        ]);

        if ($request->level == 'admin') {
            return redirect('admin/auth/edit/'.$request->username)->with('sukses', 'Data berhasil di ubah');
        } elseif ($request->level == 'guru') {
            return redirect('guru/auth/edit/'.$request->nip)->with('sukses', 'Data berhasil di ubah');
        } else {
            return redirect('siswa/auth/edit/'.$request->nisn)->with('sukses', 'Data berhasil di ubah');
        }
        // return view('dashboard');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }
}
