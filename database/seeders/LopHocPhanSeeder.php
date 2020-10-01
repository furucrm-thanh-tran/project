<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LopHocPhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lop_hoc_phans')->insert([
            'BuoiHoc' => 'Thứ 2',
            'TietBD' => 1,
            'SoTiet' => 3,
            'SoTuan' => 18,
            'idHP' => 1,
        ]);

        DB::table('lop_hoc_phans')->insert([
            'BuoiHoc' => 'Thứ 5',
            'TietBD' => 6,
            'SoTiet' => 3,
            'SoTuan' => 18,
            'idHP' => 1,
        ]);

        DB::table('lop_hoc_phans')->insert([
            'BuoiHoc' => 'Thứ 3',
            'TietBD' => 6,
            'SoTiet' => 3,
            'SoTuan' => 18,
            'idHP' => 2,
        ]);

        DB::table('lop_hoc_phans')->insert([
            'BuoiHoc' => 'Thứ 4',
            'TietBD' => 1,
            'SoTiet' => 3,
            'SoTuan' => 18,
            'idHP' => 3,
        ]);
    }
}
