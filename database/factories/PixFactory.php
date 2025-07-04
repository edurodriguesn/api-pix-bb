<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Pix;

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
