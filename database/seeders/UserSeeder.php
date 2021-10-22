<?php

namespace Database\Seeders;
use DB;
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
            'name' => 'PakDosen',
            'role'=>'admin',
            'email'=>'rahmatarifin.wibowo@gmail.com',
            'password'=>bcrypt('12345')]);

            DB::table('users')->insert([
                'name' => 'Andi Sitorus',
                'role'=>'siswa',
                'siswa_id'=> 1,
                'email'=>'andi.sitorus@gmail.com',
                'password'=>bcrypt('12345')]);

                DB::table('users')->insert([
                    'name' => 'Carolus',
                    'role'=>'siswa',
                    'siswa_id'=> 2,
                    'email'=>'carolus@gmail.com',
                    'password'=>bcrypt('12345')]);
    }
}
