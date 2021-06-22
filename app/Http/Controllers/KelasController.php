<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function proses_input_kelas(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $data = $request->all();
        $jml_data = count($data['nisn']);

        for ($i=0; $i < $jml_data; $i++) { 
            Siswa::where('nisn', $data['nisn'][$i])->update(['id_kelas' => $data['id_kelas'][$i]]);
        }

        return redirect('admin/input-kelas')->with('sukses', 'Kelas berhasil di input!');
    }
}
