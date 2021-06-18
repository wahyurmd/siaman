<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function proses_input_uts(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $id_kelas = $request->id_kelas;
        $nisn = $request->nisn;
        $id_mapel = $request->id_mapel;
        $id_semester = $request->id_semester;
        $uts = $request->uts;

        foreach ($id_kelas as $key) {
            DB::table('nilai')->insert([
                'id_kelas'      => $id_kelas[$key],
                'nisn'          => $nisn[$key],
                'id_mapel'      => $id_mapel[$key],
                'id_semester'   => $id_semester[$key],
                'uts'           => $uts[$key],
                'created_at'    => Carbon::now()->toDateTimeString()
            ]);
        }

        return redirect('guru/input_uts');
    }
}
