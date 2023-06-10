<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PemeriksaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $date = Carbon::createFromFormat('Y-m-d H:i:s', '2022-10-18 00:00:00');
        $this->command->info("Seeding Pemeriksaan");
        $this->command->getOutput()->progressStart(20);
        for ($i = 0; $i < 20; $i++) {
            DB::table('pemeriksaans')->insert([
                'user_id' => 1,
                'pasien_id' => rand(1, 10),
                'status_id' => rand(1, 4),
                'created_at' => $date->format('Y-m-d H:i:s'),
                'updated_at' => $date->format('Y-m-d H:i:s'),
            ]);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
