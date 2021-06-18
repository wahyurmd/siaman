<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mapel')->insert([
            [
                'id_mapel'  => 'BIO1',
                'mapel'     => 'Biologi',
                'nip'       => '11190910000013'
            ],
            [
                'id_mapel'  => 'BIO2',
                'mapel'     => 'Biologi',
                'nip'       => '11190910000007'
            ],
            [
                'id_mapel'  => 'FIS1',
                'mapel'     => 'Fisika',
                'nip'       => '11190910000013'
            ],
            [
                'id_mapel'  => 'FIS2',
                'mapel'     => 'Fisika',
                'nip'       => '11190910000007'
            ]
        ]);
    }
}
