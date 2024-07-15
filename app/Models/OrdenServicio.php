<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenServicio extends Model
{
    use HasFactory;
    protected $table = 'orden_servicios';

    protected $fillable = [
        'fecha',
        'razon_social',
        'estado',
        'no_orden',
        'vehiculo',
        'modelo',
        'anio',
        'placa',
        'reporte_cliente',
        'kilometraje',
        'no_economico',
        'sub_total',
        'impuestos',
        'total',
    ];
}
