<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BidangPemeriksaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            "Hematodologi", "Bakteriologi dan Parasitologo", "Kimia Klinik", "Faeces", "Urinalisa", "Imunoserologi", "Lain-Lain", "Cobain"
        ];
        foreach ($data as $data) {
            DB::table('bidang_pemeriksaans')->insert([
                'bidang' => $data,
            ]);
        }
    }
}
