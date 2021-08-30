<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'specialist_id' => $this->faker->randomNumber(2),
            'start_time' => date('H:i:s',mktime(9,0,0)),
            'end_time' => date('H:i:s',mktime(12,0,0)),
            'duration' => date('H:i:s',mktime(1,0,0)),
        ];
    }
}
