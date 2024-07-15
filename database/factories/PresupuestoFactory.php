<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Presupuesto>
 */
class PresupuestoFactory extends Factory
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
            'estado' => $this->faker->randomElement(['pendiente', 'aprobado', 'rechazado']),
            'no_orden' => $this->faker->numerify('ORD######'),
            'vehiculo' => $this->faker->word(),
            'modelo' => $this->faker->word(),
            'year' => $this->faker->year(),
            'placa' => $this->faker->regexify('[A-Z]{3}-[0-9]{3}'),
            'reporte_cliente' => $this->faker->paragraph(),
            'kilometraje' => $this->faker->numberBetween(0, 300000),
            'no_economico' => $this->faker->optional()->numerify('NE######'),
            'sub_total' => $this->faker->randomFloat(2, 1000, 5000),
            'impuestos' => $this->faker->randomFloat(2, 100, 1000),
            'total' => $this->faker->randomFloat(2, 1100, 6000),
        ];
    }
}
