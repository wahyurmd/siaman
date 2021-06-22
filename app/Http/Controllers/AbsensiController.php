<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function proses_input_absen(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $data = $request->all();
        $jml_data = count($data['nisn']);

        for ($i=0; $i < $jml_data; $i++) {
            $data2 = array(
                'id_mapel'      => $data['id_mapel'][$i],
                'id_kelas'      => $data['id_kelas'][$i],
                'nisn'          => $data['nisn'][$i],
                'tanggal'       => $data['tanggal'][$i],
                'pertemuan'     => $data['pertemuan'][$i],
                'kehadiran'     => $data['kehadiran'][$i],
                'created_at'    => Carbon::now()->toDateTimeString()
            );
            Absensi::create($data2);
        }

        return redirect('guru/absensi-siswa')->with('sukses','Absensi berhasil di input');
    }
}
