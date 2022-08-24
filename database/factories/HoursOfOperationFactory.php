<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HoursOfOperationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'business_id' => $this->faker->numberBetween(1, 10),
            'open_time'   => $this->faker->numberBetween(7, 12) . ':00 a.m.',
            'close_time'  => $this->faker->numberBetween(8, 12) . ':00 p.m.',
            'day'         => $this->faker->dayOfWeek
        ];
    }
}
