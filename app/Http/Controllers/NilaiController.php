<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function proses_input_formatif(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $data = $request->all();
        $jml_data = count($data['nisn']);

        for ($i=0; $i < $jml_data; $i++) {
            $data2 = array(
                'id_kelas'      => $data['id_kelas'][$i],
                'nisn'          => $data['nisn'][$i],
                'id_mapel'      => $data['id_mapel'][$i],
                'id_semester'   => $data['id_semester'][$i],
                'nilai'         => $data['nilai'][$i],
                'keterangan'    => $data['keterangan'][$i],
                'created_at'    => Carbon::now()->toDateTimeString()
            );
            Nilai::create($data2);
        }

        return redirect('guru/input_formatif')->with('sukses','Nilai Formatif berhasil di input');
    }

    public function proses_input_uts(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $data = $request->all();
        $jml_data = count($data['nisn']);

        for ($i=0; $i < $jml_data; $i++) {
            $data2 = array(
                'id_kelas'      => $data['id_kelas'][$i],
                'nisn'          => $data['nisn'][$i],
                'id_mapel'      => $data['id_mapel'][$i],
                'id_semester'   => $data['id_semester'][$i],
                'nilai'         => $data['nilai'][$i],
                'keterangan'    => $data['keterangan'][$i],
                'created_at'    => Carbon::now()->toDateTimeString()
            );
            Nilai::create($data2);
        }

        return redirect('guru/input_uts')->with('sukses','Nilai UTS berhasil di input');
    }

    public function proses_input_uas(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $data = $request->all();
        $jml_data = count($data['nisn']);

        for ($i=0; $i < $jml_data; $i++) {
            $data2 = array(
                'id_kelas'      => $data['id_kelas'][$i],
                'nisn'          => $data['nisn'][$i],
                'id_mapel'      => $data['id_mapel'][$i],
                'id_semester'   => $data['id_semester'][$i],
                'nilai'         => $data['nilai'][$i],
                'keterangan'    => $data['keterangan'][$i],
                'created_at'    => Carbon::now()->toDateTimeString()
            );
            Nilai::create($data2);
        }

        return redirect('guru/input_uas')->with('sukses','Nilai UAS berhasil di input');
    }
}
