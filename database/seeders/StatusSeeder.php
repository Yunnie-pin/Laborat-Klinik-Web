<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = ['Belum diproses', 'Menunggu direview', 'Selesai', 'Dibatalkan'];
        foreach ($status as $d) {
            DB::table('statuses')->insert([
                'name' => $d,
            ]);
        }
    }
}
