<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function proses_input_uts(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $data = $request->all();
        $jml_data = count($data['nisn']);
        // dd($data['id_kelas']);

        for ($i=0; $i < $jml_data; $i++) {
            $data2 = array(
                'id_kelas'      => $data['id_kelas'][$i],
                'nisn'          => $data['nisn'][$i],
                'id_mapel'      => $data['id_mapel'][$i],
                'id_semester'   => $data['id_semester'][$i],
                'uts'           => $data['uts'][$i],
                'created_at'    => Carbon::now()->toDateTimeString()
            );
            Nilai::create($data2);
        }

        // if ($jml_data > 0) {
        //     foreach ($data['id_kelas'] as $i => $value) {
        //         // dd($data['nisn'][$i]);
        //         $data2 = array(
        //             'id_kelas'      => $data['id_kelas'][$i],
        //             'nisn'          => $data['nisn'][$i],
        //             'id_mapel'      => $data['id_mapel'][$i],
        //             'id_semester'   => $data['id_semester'][$i],
        //             'uts'           => $data['uts'][$i],
        //             'created_at'    => Carbon::now()->toDateTimeString()
        //         );
        //         Nilai::create($data2);
        //     }
        // }

        // $id_kelas = $request->id_kelas;
        // $nisn = $request->nisn;
        // $id_mapel = $request->id_mapel;
        // $id_semester = $request->id_semester;
        // $uts = $request->uts;

        // foreach ($id_kelas as $i) {
        //     DB::table('nilai')->insert([
        //         'id_kelas'      => $id_kelas[$i],
        //         'nisn'          => $nisn[$i],
        //         'id_mapel'      => $id_mapel[$i],
        //         'id_semester'   => $id_semester[$i],
        //         'uts'           => $uts[$i],
        //         'created_at'    => Carbon::now()->toDateTimeString()
        //     ]);
        // }

        return redirect('guru/input_uts');
    }
}
