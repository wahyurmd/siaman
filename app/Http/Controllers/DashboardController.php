<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        return view('dashboard', ['user' => $user, 'data' => $data, 'data2' => $data2]);
    }

    // Bagian Menu Siswa
    public function absensi()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        return view('siswa/absensi', ['user' => $user, 'data' => $data, 'data2' => $data2]);
    }

    public function ulangan_harian()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        return view('siswa/ulangan_harian', ['user' => $user, 'data' => $data, 'data2' => $data2]);
    }

    public function uts()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        return view('siswa/uts', ['user' => $user, 'data' => $data, 'data2' => $data2]);
    }

    public function uas()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        return view('siswa/uas', ['user' => $user, 'data' => $data, 'data2' => $data2]);
    }

    public function jadwal_pelajaran()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        return view('siswa/jadwal_pelajaran', ['user' => $user, 'data' => $data, 'data2' => $data2]);
    }

    public function riwayat_ujian()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        return view('siswa/riwayat_ujian', ['user' => $user, 'data' => $data, 'data2' => $data2]);
    }

    // Bagian Menu Guru
    public function lapor_masalah()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();
        $tampil_kelas = Kelas::all();

        return view('guru/lapor_masalah', [
            'user' => $user,
            'data' => $data,
            'data2' => $data2,
            'tampil_kelas' => $tampil_kelas
            ]);
    }

    public function daftar_laporan()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();
        $laporan = DB::table('laporan')
        ->join('guru','laporan.nip','=','guru.nip')
        ->join('siswa','laporan.nisn','=','siswa.nisn')
        ->join('kelas','laporan.id_kelas','=','kelas.id_kelas')
        ->select('laporan.*','guru.nip','guru.nama as nama_guru','siswa.nisn','siswa.nama as nama_siswa','kelas.*')
        ->get();

        return view('guru/daftar_laporan', [
            'user' => $user,
            'data' => $data,
            'data2' => $data2,
            'laporan' => $laporan
            ]);
    }

    public function input_uh()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        return view('guru/input_uh', ['user' => $user, 'data' => $data, 'data2' => $data2]);
    }

    // public function input_uts()
    // {
    //     $user = Auth::user();
    //     $data = DB::table('users')
    //     ->join('siswa', 'users.username', '=', 'siswa.nisn')
    //     ->select('users.*', 'siswa.nisn', 'siswa.nama', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address', 'siswa.id_kelas')->get();
    //     $data2 = DB::table('users')
    //     ->join('guru', 'users.username', '=', 'guru.nip')
    //     ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();
    //     $pelajaran = DB::table('mapel')
    //     ->join('guru', 'mapel.nip', '=', 'guru.nip')
    //     ->get();
    //     $tampil_kelas = Kelas::all();

    //     return view('guru/input_uts', [
    //         'user' => $user,
    //         'data' => $data,
    //         'data2' => $data2,
    //         'pelajaran' => $pelajaran,
    //         'tampil_kelas' => $tampil_kelas
    //     ]);
    // }

    public function input_uts()
    {
        // get value from the form
        $mapel_input = Request()->mapel;
        $semester_input = Request()->semester;
        $kelas_input = Request()->kelas;

        // data user yang sedang login
        $user = Auth::user();

        // data mapel
        $pelajaran = DB::table('mapel')
        ->join('guru', 'mapel.nip', '=', 'guru.nip')
        ->get();

        // data kelas
        $tampil_kelas = DB::table('kelas')->get();

        // data guru untuk validasi session guru
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        // data siswa untuk validasi session siswa
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.nama', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address', 'siswa.id_kelas')->get();

        $output = DB::table('siswa')
        ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
        ->where('kelas.id_kelas', $kelas_input)
        ->get();

        return view('guru.input_uts')->with(compact(
            'pelajaran',
            'tampil_kelas',
            'data2',
            'data',
            'user',
            'mapel_input',
            'semester_input',
            'kelas_input',
            'output'
        ));
    }

    public function input_uas()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        return view('guru/input_uas', ['user' => $user, 'data' => $data, 'data2' => $data2]);
    }
}
