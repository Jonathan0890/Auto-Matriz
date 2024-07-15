<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventario>
 */
class InventarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'folio_inventario' => $this->faker->unique()->numerify('INV######'),
            'clave_unica_producto' => $this->faker->unique()->numerify('PROD######'),
            'numero_producto' => $this->faker->numberBetween(1, 1000),
            'descripcion_producto' => $this->faker->sentence(),
            'cantidad' => $this->faker->numberBetween(1, 1000),
            'precio_producto' => $this->faker->randomFloat(2, 10, 1000),
            'monto' => $this->faker->randomFloat(2, 10, 10000),
        ];
    }
}
