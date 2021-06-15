<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'      => 'Jajang Nurjaman',
                'username'  => '11190910000006',
                'password'  => bcrypt('siswa123'),
                'level'     => 'siswa',
                'jabatan'   => 'Siswa'
            ],
            // [
            //     'name'      => 'Anugrah Pramesta',
            //     'username'  => '11190910000007',
            //     'password'  => bcrypt('guru123'),
            //     'level'     => 'guru',
            //     'jabatan'   => 'Wali Kelas'
            // ]
        ]);
    }
}
