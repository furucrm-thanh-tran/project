<?php

namespace Database\Factories;

use App\Models\SinhVien;
use Illuminate\Database\Eloquent\Factories\Factory;

class SinhVienFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SinhVien::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'mssv' => $this->faker->unique()->ean8,
            'HoTen' => $this->faker->name,
            'GioiTinh' => $gender,
            'Email' => $this->faker->unique()->freeEmail,
        ];
    }
}
