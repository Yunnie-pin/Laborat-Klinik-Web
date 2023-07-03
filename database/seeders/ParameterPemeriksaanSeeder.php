<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ParameterPemeriksaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'bidang_id' => 1,
                'parameter' => 'Darah Rutin',
                'nilai_rujukan' => ' ',
                'metode_id' => 2,
                'satuan' => ' ',
                'harga' => '10000',
            ],
            [
                'bidang_id' => 1,
                'parameter' => 'Hemoglobin',
                'nilai_rujukan' => 'p : 12-16 g/dL, l : 14-18 g/dL',
                'metode_id' => 2,
                'satuan' => 'g/dl',
                'harga' => '10000',
            ],
            [
                'bidang_id' => 1,
                'parameter' => 'Hitung Erytrosit',
                'nilai_rujukan' => '3,5-5,5 jt/mm3',
                'metode_id' => 2,
                'satuan' => 'jt/mm3',
                'harga' => '10000',
            ],
            [
                'bidang_id' => 1,
                'parameter' => 'Hitung Lekosit',
                'nilai_rujukan' => '4-11 rb/mm3',
                'metode_id' => 2,
                'satuan' => 'rb/mm3',
                'harga' => '10000',
            ],
            [
                'bidang_id' => 1,
                'parameter' => 'Hitung Trombosit',
                'nilai_rujukan' => '150-450 rb/mm3',
                'metode_id' => 2,
                'satuan' => 'rb/mm3',
                'harga' => '10000',
            ],
        ];
        foreach ($data as $data) {
            DB::table('parameter_pemeriksaans')->insert($data);
        }
    }
}
