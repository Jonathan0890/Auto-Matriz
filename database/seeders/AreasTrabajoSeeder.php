<?php

namespace Database\Seeders;

use App\Models\AreasTrabajo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubareaTrabajo;

class AreasTrabajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $areasTrabajo = [
            [
                'nombre' => 'Mecánica preventiva y correctiva',
                'descripcion' => 'Afinaciones, Cambio de aceite y filtro, Cambio de filtro de aire y gasolina, Bujías, Bobina y cables de bujías, Frenos, Clutch, Suspensiones completas, Dirección hidráulica y mecánica, Amortiguadores, Rótulas, Varillas y terminales de dirección, Cajas de dirección, Sistema de aire acondicionado, Radiadores, Mangueras, Tomas de agua, Bombas de aceite de motor, Bomba de gasolina, Bomba de dirección hidráulica, Cambio de banda dentada de distribución, Poleas guías y polea tensora, Banda de motor, Baleros de ruedas y mazas, Flechas (Reparación o cambio), Diferenciales, Transmisiones Automáticas o manuales, Motor (Reconstruir o cambiar), Cabezas de motor (Reparar), Mofles, Extracción de tornillos y mucho más'
            ],
            [
                'nombre' => 'Sistema eléctrico y electrónico',
                'descripcion' => 'Marchas, Alternadores, Baterías, Terminales de baterías, Sensores, Solenoides, Electroválvulas, Luces, Direcciones, Motor limpiaparabrisas, Sistema de ABS, Sistema de bolsas de aire (Airbag), Control electrónico de tracción, Computadoras y módulos, Cableado, Conectores, Estéreos, Bocinas, Antenas, Asientos eléctricos, Encendedores'
            ],
            [
                'nombre' => 'Estética automotriz',
                'descripcion' => 'Lavado de tapicería, asientos, puertas, techos, tableros y alfombras profesional, Pulido, encerado y abrillantado de carrocería, Descontaminación de pintura, Lavado y engrasado de chasis, Lavado y estética de motor, Servicio de tapicería, reparación de asientos, techos, puertas y volantes, Desinfección de interiores y sistema de aire acondicionado'
            ],
            [
                'nombre' => 'Hojalateria y Pintura',
                'descripcion' => 'Pintura general de carrocería, Aplicación de anticorrosivo, Reparación de golpes y portazos, Enderezado de chasis, Enderezado de cofres, puertas, salpicaderas, etc., Reparación de fascias, Trabajos de soldadura general, Extracción de tornillos y birlos'
            ],
            [
                'nombre' => 'Rines y Llantas',
                'descripcion' => 'Reparación y enderezado de Rines, Venta de rines y llantas'
            ]
        ];

        foreach ($areasTrabajo as $area) {
            AreasTrabajo::create($area);

            /*    foreach ($subareas as $subarea) {
                SubareaTrabajo::create([
                    'area_id' => $nuevaTrabajo->id,
                    'nombre' => $subarea,
                    'descripcion' => $subarea
                ]);
            }
                */
        }
    }
}
