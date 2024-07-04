<?php

namespace Database\Seeders;

use App\Models\SubareaTrabajo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $subareasTrabajo =[
            [
                'nombre' => '' ,
                'descripcion' => ''
            ]
        ];

        foreach ($subareasTrabajo as $subareaTrabajo){
            SubareaTrabajo::create($subareaTrabajo);
        }
    }
}
