<?php

namespace Database\Factories;

use App\Models\Pix;
use Illuminate\Database\Eloquent\Factories\Factory;

class PixFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pix::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'expiracao' => fake()->dateTime(),
            'txid' => fake()->word(),
            'status' => fake()->word(),
            'valor' => fake()->randomFloat(2, 0, 99999999.99),
        ];
    }
}
