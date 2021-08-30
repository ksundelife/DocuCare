<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'specialist_id' => $this->faker->randomNumber(2),
            'user_id' => $this->faker->randomNumber(2),
            'schedule_id' => $this->faker->randomNumber(2),
            'datetime' => $this->faker->dateTimeBetween('-1 week', '+1 week')
                ->setTime($this->faker->numberBetween(9,11),0),
            'description' => $this->faker->sentence(10),
            'is_over' => $this->faker->boolean,
        ];
    }
}
