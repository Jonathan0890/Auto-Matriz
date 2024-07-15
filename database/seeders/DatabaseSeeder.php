<?php

namespace Database\Seeders;

use App\Models\Clientes;
use App\Models\Credito;
use App\Models\Facturacion;
use App\Models\Inventario;
use App\Models\Mensaje;
use App\Models\OrdenServicio;
use App\Models\Paquete;
use App\Models\Presupuesto;
use App\Models\Report;
use App\Models\Reporte;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory(10)->create();
        Mensaje::factory(10)->create();
        Inventario::factory(10)->create();
        Credito::factory(10)->create();
        Facturacion::factory(10)->create();
        Reporte::factory(10)->create();
        Presupuesto::factory(10)->create();
        OrdenServicio::factory(10)->create();
        Paquete::factory(10)->create();
        Mensaje::factory(10)->create();

        User::factory()->create([
            'id' => 1,
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); 

        User::factory()->create([
            'id' => 2,
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        User::factory()->create([
            'id' => 3,
            'name' => 'Super Admin',
            'email' => 'super_admin@example.com',
        ]);

        User::factory()->create([
            'id' => 4,
            'name' => 'Jonas',
            'email' => 'Jonas@example.com',
        ]);

        $this->call([
            ServiciosSeeder::class,
            AreasTrabajoSeeder::class,
        ]);
    }
}
