<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'business_id' => $this->faker->numberBetween(1, 200),
            'source_id' => $this->faker->numberBetween(1, 5),
            'number_of_reviews' => $this->faker->numberBetween(100, 2000),
            'score' => $this->faker->randomFloat(1, 1, 5),
            'link' => 'https://www.google.com/maps/place/Siena+Tavern/@41.8890864,-87.6298924,15z/data=!3m1!5s0x880e2cb74cae0e7b:0xb7392f617178520d!4m7!3m6!1s0x0:0xecd6f9b48656e27b!8m2!3d41.8890864!4d-87.6298924!9m1!1b1',
        ];
    }
}
