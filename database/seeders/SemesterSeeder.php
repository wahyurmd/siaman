<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('Asia/Jakarta');
        DB::table('semester')->insert([
            [
                'semester'      => 'Ganjil',
                'tahun_ajaran'  => '2020/2021',
                'created_at'    => Carbon::now()->toDateTimeString()
            ],
            [
                'semester'      => 'Genap',
                'tahun_ajaran'  => '2020/2021',
                'created_at'    => Carbon::now()->toDateTimeString()
            ]
        ]);
    }
}
