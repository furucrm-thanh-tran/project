<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HocPhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hoc_phans')->insert([
            'MaHP' => 'CT106H',
            'TenHP' => 'Mạng máy tính',
            'SoTC' => 3,
        ]);

        DB::table('hoc_phans')->insert([
            'MaHP' => 'CT214H',
            'TenHP' => 'Lập trình web',
            'SoTC' => 3,
        ]);

        DB::table('hoc_phans')->insert([
            'MaHP' => 'CT308H',
            'TenHP' => 'Thương mại điện tử',
            'SoTC' => 3,
        ]);
    }
}
