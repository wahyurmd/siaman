<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function proses_input_jadwal(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $data = $request->all();
        $jml_data = count($data['id_mapel']);

        for ($i=0; $i < $jml_data; $i++) { 
            $data2 = array(
                'id_mapel'      => $data['id_mapel'][$i],
                'id_kelas'      => $data['id_kelas'][$i],
                'hari'          => $data['hari'][$i],
                'jam_mulai'     => $data['jam_mulai'][$i],
                'jam_akhir'     => $data['jam_akhir'][$i],
                'created_at'    => Carbon::now()->toDateTimeString()
            );

            Jadwal::create($data2);
        }

        return redirect('admin/input-jadwal')->with('sukses', 'Jadwal berhasil di input!');
    }
}
