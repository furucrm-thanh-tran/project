<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DkyHPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i <= 15; $i++) {
            DB::table('dky_hoc_phans')->insert([
                'idLopHP' => 1,
                'idSV' => $i,
            ]);
        }

        for ($i = 16; $i <= 30; $i++) {
            DB::table('dky_hoc_phans')->insert([
                'idLopHP' => 2,
                'idSV' => $i,
            ]);
        }

        for ($i = 31; $i <= 45; $i++) {
            DB::table('dky_hoc_phans')->insert([
                'idLopHP' => 3,
                'idSV' => $i,
            ]);
        }

        for ($i = 1; $i <= 15; $i++) {
            DB::table('dky_hoc_phans')->insert([
                'idLopHP' => 4,
                'idSV' => $i,
            ]);
        }
    }
}
