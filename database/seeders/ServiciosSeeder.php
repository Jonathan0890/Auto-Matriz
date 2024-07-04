<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servicio;


class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servicios = [
            [
                'nombre' => 'Paquete 1',
                'descripcion' => 'Cambio de aceite de motor y filtro de aceite',
                'precio_desde' => 10000
            ],
            [
                'nombre' => 'Paquete 2',
                'descripcion' => 'Cambio de aceite de motor y filtro de motor + Estudio de motor y motorcería',
                'precio_desde' => 20000
            ],
            [
                'nombre' => 'Paquete 3',
                'descripcion' => 'Afinacion mayor al motor + Estudio de motor + Lavado de motorcería y Aspirado',
                'precio_desde' => 30000
            ],
            [
                'nombre' => 'Paquete 4',
                'descripcion' => 'Afinacion mayor + Lavado Engrasado + Estudio de motor, lavado de motorcería y Aspirado',
                'precio_desde' => 10000
            ],
            [
                'nombre' => 'Paquete 5',
                'descripcion' => 'Un juego de frenos (Del. O Tras.) + Estudio de motor, lavado de motorcería y Aspirado',
                'precio_desde' => 20000
            ],
            [
                'nombre' => 'Paquete 6',
                'descripcion' => 'Cambio de frenos generales + Lavado y engrasado + Estudio de motor, Lavado de motorcería',
                'precio_desde' => 30000
            ],
            [
                'nombre' => 'Paquete 7',
                'descripcion' => 'Cambio de anticongelante + Aceite y Filtro + Estudio de motor, Lavado de motorcería',
                'precio_desde' => 10000
            ],
            [
                'nombre' => 'Paquete 8',
                'descripcion' => 'Servicio completo de lavado y engrasado + Pulido y encerado de motorcería + Estudio de motor + Lavado de vestieras',
                'precio_desde' => 20000
            ],
            [
                'nombre' => 'Paquete 9',
                'descripcion' => 'Lavado de vestiduras + Estudio de motor + Lavado de motorcería desde:',
                'precio_desde' => 30000
            ],
            [
                'nombre' => 'Paquete 10',
                'descripcion' => 'Lavado de vestiduras + Estudio de motor + Lavado de motorcería desde:',
                'precio_desde' => 20000
            ]
        ];
        foreach ($servicios as $servicio) {
            Servicio::create($servicio);
        }
    }
}
