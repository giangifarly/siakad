<?php

use Illuminate\Database\Seeder;

class UsersModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'id'  => 1,
            'telepon' => "089617222740"
        ]);

        DB::table('users')->insert([
            'id'   => 1,
            'username'  => 'admin',
            'name'      => 'Administrator',
            'email'     => 'admin@kursusgambar.web.id',
            'password'  => Hash::make('admin'),
            'admin_id'  => 1
        ]);

        DB::table('siswa')->insert([
            'id'  => 2,
            'jenis_kelamin' => 'perempuan',
            'tahun_masuk' => '2018',
            'telepon' => "089617222740"
        ]);

        DB::table('users')->insert([
            'id'   => 2,
            'username'  => 'dindarajabani',
            'name'      => 'Adinda Rajabani Widjaja',
            'email'     => 'dindarajabani547@gmail.com',
            'password'  => Hash::make('admin'),
            'siswa_id'  => 2
        ]);
    }
}
