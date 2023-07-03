<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('password'),
                'nama_lengkap' => 'Super Admin',
                'no_telp' => '08123xxxxxx',
                'roles_id' => 1,
            ],
            [
                'username' => 'administrasi',
                'email' => 'administrasi@mail.com',
                'password' => Hash::make('password'),
                'nama_lengkap' => 'Administrasi',
                'no_telp' => '08123xxxxxx',
                'roles_id' => 2,
            ],
            [
                'username' => 'Laborat',
                'email' => 'laborat@mail.com',
                'password' => Hash::make('password'),
                'nama_lengkap' => 'Laborat',
                'no_telp' => '08123xxxxxx',
                'roles_id' => 3,
            ],
            [
                'username' => 'Poli',
                'email' => 'poli@mail.com',
                'password' => Hash::make('password'),
                'nama_lengkap' => 'Poli',
                'no_telp' => '08123xxxxxx',
                'roles_id' => 4,
            ]
        ];
        foreach ($data as $d) {
            $d['created_at'] = Carbon::now()->format('Y-m-d H:i:s');
            $d['updated_at'] = Carbon::now()->format('Y-m-d H:i:s');
            DB::table('users')->insert($d);
        }
    }
}