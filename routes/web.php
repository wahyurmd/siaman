<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\NilaiController;
use App\Http\Kernel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/')->group(function () {
    Route::get('', function () {
        return redirect('login');
    });
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login/proses', [AuthController::class, 'proses_login'])->name('proses_login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::post('auth/proses-edit', [AuthController::class, 'proses_update']);

Route::get('searchautocomplete', [LaporanController::class, 'searchautocomplete'])->name('searchautocomplete');

Route::middleware(['auth'])->group(function () {
    Route::middleware(['cek_login:admin'])->group(function () {
        Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin/dashboard');
        Route::get('admin/absensi', [DashboardController::class, 'absensi']);
        Route::get('admin/nilai-formatif', [DashboardController::class, 'formatif']);
        Route::get('admin/nilai-uts', [DashboardController::class, 'uts']);
        Route::get('admin/nilai-uas', [DashboardController::class, 'uas']);
        Route::get('admin/jadwal_pelajaran', [DashboardController::class, 'jadwal_pelajaran']);
        Route::get('admin/riwayat_ujian', [DashboardController::class, 'riwayat_ujian']);
        Route::get('admin/daftar_laporan', [DashboardController::class, 'daftar_laporan']);
        Route::get('admin/registrasi', [AuthController::class, 'daftar_akun']);
        Route::get('admin/registrasi-siswa', [AuthController::class, 'daftar_akun_siswa']);
        Route::post('admin/auth/proses-registrasi', [AuthController::class, 'proses_registrasi']);
        Route::post('admin/auth/proses-registrasi-siswa', [AuthController::class, 'proses_registrasi_siswa']);
        Route::get('admin/auth/edit/{username}', [AuthController::class, 'edit_akun']);
        Route::get('admin/input-kelas', [DashboardController::class, 'input_kelas']);
        Route::get('admin/input-jadwal', [DashboardController::class, 'input_jadwal']);
        Route::post('admin/input-kelas/proses', [KelasController::class, 'proses_input_kelas']);
        Route::post('admin/input-jadwal/proses', [JadwalController::class, 'proses_input_jadwal']);
    });
    Route::middleware(['cek_login:guru'])->group(function () {
        Route::get('guru/dashboard', [DashboardController::class, 'index'])->name('guru/dashboard');
        Route::get('guru/lapor_masalah', [DashboardController::class, 'lapor_masalah']);
        Route::post('guru/lapor_masalah/tambah-proses', [LaporanController::class, 'proses_add_laporan']);
        Route::get('guru/daftar_laporan', [DashboardController::class, 'daftar_laporan']);
        Route::post('guru/daftar_laporan/update-status/{id}', [LaporanController::class, 'status_update']);
        Route::get('guru/input_jadwal', [DashboardController::class, 'input_jadwal']);
        Route::get('guru/input_absen', [DashboardController::class, 'input_absen']);
        Route::get('guru/input_formatif', [DashboardController::class, 'input_formatif']);
        Route::get('guru/input_uts', [DashboardController::class, 'input_uts']);
        Route::get('guru/input_uas', [DashboardController::class, 'input_uas']);
        Route::post('guru/input_formatif/proses', [NilaiController::class, 'proses_input_formatif']);
        Route::post('guru/input_uts/proses', [NilaiController::class, 'proses_input_uts']);
        Route::post('guru/input_uas/proses', [NilaiController::class, 'proses_input_uas']);
        Route::get('guru/auth/edit/{username}', [AuthController::class, 'edit_akun']);
        Route::get('guru/absensi-siswa', [DashboardController::class, 'input_absen']);
        Route::post('guru/absensi-siswa/proses', [AbsensiController::class, 'proses_input_absen']);
    });
    Route::middleware(['cek_login:siswa'])->group(function () {
        Route::get('siswa/dashboard', [DashboardController::class, 'index'])->name('siswa/dashboard');
        Route::get('siswa/absensi', [DashboardController::class, 'absensi']);
        Route::get('siswa/nilai-formatif', [DashboardController::class, 'formatif']);
        Route::get('siswa/nilai-uts', [DashboardController::class, 'uts']);
        Route::get('siswa/nilai-uas', [DashboardController::class, 'uas']);
        Route::get('siswa/jadwal_pelajaran', [DashboardController::class, 'jadwal_pelajaran']);
        Route::get('siswa/riwayat_ujian', [DashboardController::class, 'riwayat_ujian']);
        Route::get('siswa/auth/edit/{username}', [AuthController::class, 'edit_akun']);
    });
});
