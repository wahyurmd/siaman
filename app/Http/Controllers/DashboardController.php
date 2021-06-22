<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Siswa;
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

    // Bagian Menu Admin
    public function input_kelas()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        $siswa_get = DB::table('siswa')->where('id_kelas', '=', null)->get();
        $kelas_get = Kelas::all();

        return view('admin/input_kelas', [
            'user' => $user, 
            'data' => $data, 
            'data2' => $data2,
            'siswa_get' => $siswa_get,
            'kelas_get' => $kelas_get,
        ]);
    }

    public function input_jadwal(Request $request)
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        # Get data di DB tampil di view
        $kelas = Kelas::all();
        $mapel = DB::table('mapel')->join('guru','mapel.nip', '=', 'guru.nip')->get();

        # Get data dari view
        $id_kelas_input = $request->pilih_kelas;
        $hari_input = $request->pilih_hari;
        $kelas_input = DB::table('kelas')->where('id_kelas', $id_kelas_input)->get();

        return view('admin/input_jadwal', [
            'user' => $user, 
            'data' => $data, 
            'data2' => $data2,
            'kelas' => $kelas,
            'mapel' => $mapel,
            'id_kelas_input' => $id_kelas_input,
            'hari_input' => $hari_input,
            'kelas_input' => $kelas_input
        ]);
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

    public function formatif()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        $nilai = DB::table('nilai')
        ->join('mapel', 'nilai.id_mapel', '=', 'mapel.id_mapel')
        ->orderBy('mapel.mapel', 'asc')
        ->get();

        return view('siswa/formatif', [
            'user' => $user,
            'data' => $data, 
            'data2' => $data2,
            'nilai' => $nilai
        ]);
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
        
        $nilai = DB::table('nilai')
        ->join('mapel', 'nilai.id_mapel', '=', 'mapel.id_mapel')
        ->orderBy('mapel.mapel', 'asc')
        ->get();

        return view('siswa/uts', [
            'user' => $user,
            'data' => $data, 
            'data2' => $data2,
            'nilai' => $nilai
        ]);
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

        $nilai = DB::table('nilai')
        ->join('mapel', 'nilai.id_mapel', '=', 'mapel.id_mapel')
        ->orderBy('mapel.mapel', 'asc')
        ->get();

        return view('siswa/uas', [
            'user' => $user,
            'data' => $data, 
            'data2' => $data2,
            'nilai' => $nilai
        ]);
    }

    public function jadwal_pelajaran()
    {
        $user = Auth::user();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address', 'siswa.id_kelas')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();

        $jadwal = DB::table('jadwal_mapel')
        ->join('mapel', 'jadwal_mapel.id_mapel', '=', 'mapel.id_mapel')
        ->join('kelas', 'jadwal_mapel.id_kelas', '=', 'kelas.id_kelas')
        ->join('guru', 'mapel.nip', '=', 'guru.nip')
        ->orderBy('jadwal_mapel.jam_mulai','asc')
        ->get();

        return view('siswa/jadwal_pelajaran', [
            'user' => $user, 
            'data' => $data, 
            'data2' => $data2,
            'jadwal' => $jadwal,
        ]);
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

    public function input_formatif(Request $request)
    {
        $mapel_input = $request->pilih_mapel;
        $semester = $request->pilih_semester;
        $kelas_input = $request->pilih_kelas;

        $user = Auth::user();
        $tampil_kelas = Kelas::all();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();
        $pelajaran = DB::table('mapel')
        ->join('guru', 'mapel.nip', '=', 'guru.nip')
        ->get();
        $smt = DB::table('semester')->get();
        $output = DB::table('siswa')
        ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
        ->orderBy('siswa.nama','asc')
        ->where('kelas.id_kelas', $kelas_input)
        ->get();
        $mapel_table = DB::table('mapel')->where('id_mapel', $mapel_input)->get();
        $kelas_table = DB::table('kelas')->where('id_kelas', $kelas_input)->get();
        $semester_table = DB::table('semester')->where('id', $semester)->get();
        $mapel_table1 = DB::table('mapel')->where('id_mapel', $mapel_input)->first();
        $kelas_table1 = DB::table('kelas')->where('id_kelas', $kelas_input)->first();
        $semester_table1 = DB::table('semester')->where('id', $semester)->first();

        return view('guru/input_formatif', [
            'user' => $user,
            'data' => $data,
            'data2' => $data2,
            'pelajaran' => $pelajaran,
            'tampil_kelas' => $tampil_kelas,
            'smt' => $smt,
            'output' => $output,
            'semester' => $semester,
            'mapel_table' => $mapel_table,
            'kelas_table' => $kelas_table,
            'semester_table' => $semester_table,
            'mapel_table1' => $mapel_table1,
            'kelas_table1' => $kelas_table1,
            'semester_table1' => $semester_table1
        ]);
    }

    public function input_uts(Request $request)
    {
        $mapel_input = $request->pilih_mapel;
        $semester = $request->pilih_semester;
        $kelas_input = $request->pilih_kelas;

        $user = Auth::user();
        $tampil_kelas = Kelas::all();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.nama', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address', 'siswa.id_kelas')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();
        $pelajaran = DB::table('mapel')
        ->join('guru', 'mapel.nip', '=', 'guru.nip')
        ->get();
        $smt = DB::table('semester')->get();
        $output = DB::table('siswa')
        ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
        ->orderBy('siswa.nama','asc')
        ->where('kelas.id_kelas', $kelas_input)
        ->get();
        $mapel_table = DB::table('mapel')->where('id_mapel', $mapel_input)->get();
        $kelas_table = DB::table('kelas')->where('id_kelas', $kelas_input)->get();
        $semester_table = DB::table('semester')->where('id', $semester)->get();
        $mapel_table1 = DB::table('mapel')->where('id_mapel', $mapel_input)->first();
        $kelas_table1 = DB::table('kelas')->where('id_kelas', $kelas_input)->first();
        $semester_table1 = DB::table('semester')->where('id', $semester)->first();

        return view('guru/input_uts', [
            'user' => $user,
            'data' => $data,
            'data2' => $data2,
            'pelajaran' => $pelajaran,
            'tampil_kelas' => $tampil_kelas,
            'smt' => $smt,
            'output' => $output,
            'semester' => $semester,
            'mapel_table' => $mapel_table,
            'kelas_table' => $kelas_table,
            'semester_table' => $semester_table,
            'mapel_table1' => $mapel_table1,
            'kelas_table1' => $kelas_table1,
            'semester_table1' => $semester_table1
        ]);
    }

    public function input_uas(Request $request)
    {
        $mapel_input = $request->pilih_mapel;
        $semester = $request->pilih_semester;
        $kelas_input = $request->pilih_kelas;

        $user = Auth::user();
        $tampil_kelas = Kelas::all();
        $data = DB::table('users')
        ->join('siswa', 'users.username', '=', 'siswa.nisn')
        ->select('users.*', 'siswa.nisn', 'siswa.tgl_lahir as tgllahir', 'siswa.jenis_kelamin as jk', 'siswa.no_telp as no_hp', 'siswa.alamat as address')->get();
        $data2 = DB::table('users')
        ->join('guru', 'users.username', '=', 'guru.nip')
        ->select('users.*', 'guru.nip', 'guru.tgl_lahir as tgllahir', 'guru.jenis_kelamin as jk', 'guru.no_telp as no_hp', 'guru.alamat as address')->get();
        $pelajaran = DB::table('mapel')
        ->join('guru', 'mapel.nip', '=', 'guru.nip')
        ->get();
        $smt = DB::table('semester')->get();
        $output = DB::table('siswa')
        ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
        ->orderBy('siswa.nama','asc')
        ->where('kelas.id_kelas', $kelas_input)
        ->get();
        $mapel_table = DB::table('mapel')->where('id_mapel', $mapel_input)->get();
        $kelas_table = DB::table('kelas')->where('id_kelas', $kelas_input)->get();
        $semester_table = DB::table('semester')->where('id', $semester)->get();
        $mapel_table1 = DB::table('mapel')->where('id_mapel', $mapel_input)->first();
        $kelas_table1 = DB::table('kelas')->where('id_kelas', $kelas_input)->first();
        $semester_table1 = DB::table('semester')->where('id', $semester)->first();

        return view('guru/input_uas', [
            'user' => $user,
            'data' => $data,
            'data2' => $data2,
            'pelajaran' => $pelajaran,
            'tampil_kelas' => $tampil_kelas,
            'smt' => $smt,
            'output' => $output,
            'semester' => $semester,
            'mapel_table' => $mapel_table,
            'kelas_table' => $kelas_table,
            'semester_table' => $semester_table,
            'mapel_table1' => $mapel_table1,
            'kelas_table1' => $kelas_table1,
            'semester_table1' => $semester_table1
        ]);
    }
}
