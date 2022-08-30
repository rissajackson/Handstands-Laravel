<?php

namespace Database\Factories;

use App\Models\Handstand;
use Illuminate\Database\Eloquent\Factories\Factory;

class HandstandFactory extends Factory
{
      /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Handstand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'body' => $this->faker->words(10, true),
            'slug' => $this->faker->slug(3),
        ];
    }
}
