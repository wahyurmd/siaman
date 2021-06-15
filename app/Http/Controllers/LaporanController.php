<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function searchautocomplete(Request $request)
    {
        // $data = Siswa::all();
        $data = DB::table('siswa')
        ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')->get();
        
        return response()->json($data);
    }
    
    public function proses_add_laporan(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        
        DB::table('laporan')->insert([
            'nip'        => $request->nip,
            'nisn'       => $request->nisn,
            'id_kelas'   => $request->id_kelas,
            'kronologi'  => $request->kronologi,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        return redirect('guru/lapor_masalah')->with('sukses','Laporan berhasil dibuat');
    }

    public function status_update(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        DB::table('laporan')->where('id_laporan', $request->id_laporan)->update([
            'status'     => $request->status,
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        return redirect('guru/daftar_laporan');
    }
}
