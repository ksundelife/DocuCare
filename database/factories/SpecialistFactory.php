<?php

namespace Database\Factories;

use App\Models\Specialist;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpecialistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Specialist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->randomNumber(2),
            'user_id' => $this->faker->randomNumber(2),
            'location' => implode(' ',$this->faker->words(3)),
            'price' => $this->faker->randomNumber(3,true),
            'photo' => '/img/doctor-01.jpg',
        ];
    }
}
