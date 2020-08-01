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
        DB::table('siswa')->insert([
            'id'  => 1,
            'telepon' => "089617222740"
        ]);

        DB::table('users')->insert([
            'id'   => 1,
            'username'  => 'admin',
            'name'      => 'Administrator',
            'email'     => 'admin@kursusgambar.web.id',
            'password'  => Hash::make('admin'),
            'siswa_id'  => 1
        ]);
    }
}
