<?php

namespace Database\Seeders;

use App\Models\SinhVien;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SinhVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sinh_viens')->insert([
            'mssv' => 'B1606842',
            'HoTen' => 'Trần Tấn Thanh',
            'GioiTinh' => 'Nam',
            'Email' => 'thanhcnttk42@gmail.com'
        ]);

        DB::table('sinh_viens')->insert([
            'mssv' => 'B1605396',
            'HoTen' => 'Lê Phúc Lộc',
            'GioiTinh' => 'Nam',
            'Email' => 'locb1605396@student.ctu.edu.vn'
        ]);
        $faker = Faker::create();
        for ($i = 1607100; $i <= 1607142; $i++) {
            $gender = $faker->randomElement(['Nam', 'Nữ']);
            DB::table('sinh_viens')->insert([
                'mssv' => 'B' . $i,
                'HoTen' => $faker->name,
                'GioiTinh' => $gender,
                'Email' => $faker->unique()->freeEmail,
            ]);
        }
        // SinhVien::factory(43)->create();
    }
}
