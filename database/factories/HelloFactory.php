<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hello;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hello>
 */

class HelloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hello::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->randomNumber(),
            'title' => $this->faker->sentence(),
            'start_date' => $this->faker->date(),
            'description' => $this->faker->paragraph(),
        ];
    }
}