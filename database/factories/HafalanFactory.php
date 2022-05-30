<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hafalan>
 */
class HafalanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'halaman'   =>  $this->faker->numberBetween(1,500),
            'user_id'   =>  \App\Models\User::first()->id,
        ];
    }
}
