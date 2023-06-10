<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MetodePemeriksaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
 $data = [
            "-",
            "hematologi analyzer",
            "westergren",
            "slide",
            "mikroskop",
            "POCT",
            "kolorimetri GPO-PAP",
            "kolorimetri uricase",
            "tes dipstick",
            "benedict",
            "biuret",
            "strip",
            "imunokromatografi rapid test",
            "tes PCR",
            "tes aglutinasi slide",
            "imunokromatografi",
            "rapid test"
        ];
        foreach ($data as $data) {
            DB::table('metode_pemeriksaans')->insert(
                [
                    'name' => $data,
                ]
            );
        }
    }
}
