<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Credito>
 */
class CreditoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha' => $this->faker->date(),
            'razon_social' => $this->faker->company(),
            'RFC' => $this->faker->regexify('[A-Z]{4}[0-9]{6}[A-Z0-9]{3}'),
            'no_orden' => $this->faker->numerify('ORD######'),
            'dias_restantes' => $this->faker->numberBetween(1, 365),
            'vehiculo' => $this->faker->word(),
            'modelo' => $this->faker->word(),
            'anio' => $this->faker->year(),
            'placa' => $this->faker->regexify('[A-Z]{3}-[0-9]{3}'),
            'anticipo' => $this->faker->randomFloat(2, 1000, 5000),
            'por_pagar' => $this->faker->randomFloat(2, 1000, 5000),
            'total' => $this->faker->randomFloat(2, 5000, 10000),
        ];
    }
}
