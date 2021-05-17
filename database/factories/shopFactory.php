<?php

namespace Database\Factories;

use App\Models\shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class shopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = shop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->city,
            'capacitat'=>$this->faker->randomDigit,
        ];
    }
}
