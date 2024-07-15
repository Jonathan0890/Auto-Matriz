<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facturacion>
 */
class FacturacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number_factura' => $this->faker->unique()->numerify('FAC#####'),
            'cliente_id' => $this->faker->randomNumber(),
            'fecha_emision' => $this->faker->date(),
            'fecha_vencimiento' => $this->faker->date(),
            'total' => $this->faker->randomFloat(2, 100, 10000),
            'estado' => $this->faker->randomElement(['pendiente', 'pagado', 'cancelado']),
            'observacion' => $this->faker->sentence(),
        ];
    }
}
