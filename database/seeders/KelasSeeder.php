<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            [
                'kelas'         => 'X',
                'jurusan'       => 'IPA 1',
                'id_wali_kelas' => '1'
            ],
            [
                'kelas'         => 'XI',
                'jurusan'       => 'IPA 1',
                'id_wali_kelas' => '1'
            ],
            [
                'kelas'         => 'XII',
                'jurusan'       => 'IPA 1',
                'id_wali_kelas' => '1'
            ]
        ]);
    }
}
