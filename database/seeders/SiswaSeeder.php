<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_siswa')->insert([
        'nama'=>'Chandra',
        'nik'=>'102',
        'tgl_lahir'=>'2003-12-22'

    ]);
        DB::table('table_siswa')->insert([
            'nama'=>'Chika',
            'nik'=>'103',
            'tgl_lahir'=>'2001-02-12'
        ]);
        //
    }
}
