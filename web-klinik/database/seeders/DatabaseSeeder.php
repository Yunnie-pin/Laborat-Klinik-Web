<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

//use App\Models\User;
use App\Models\Pasien;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\RolesSeeder;
use Database\Seeders\BidangPemeriksaanSeeder;
use Database\Seeders\MetodePemeriksaanSeeder;
use Database\Seeders\ParameterPemeriksaanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Pasien::factory(10)->create();

        $this->call([
            UserSeeder::class,
            RolesSeeder::class,
            BidangPemeriksaanSeeder::class,
            MetodePemeriksaanSeeder::class,
            ParameterPemeriksaanSeeder::class,
            StatusSeeder::class,
            PemeriksaanSeeder::class,
            KeteranganSeeder::class
        ]);


    }
}
