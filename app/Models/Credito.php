<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    use HasFactory;

    protected $table = 'creditos';

    protected $fillable = [
        'fecha',
        'razon_social',
        'RFC',
        'no_orden',
        'dias_restantes',
        'vehiculo',
        'modelo',
        'anio',
        'placa',
        'anticipo',
        'por_pagar',
        'total',
    ];

    protected $casts = [
        'fecha' => 'date',
        'anio' => 'integer',
        'anticipo' => 'decimal:2',
        'por_pagar' => 'decimal:2',
        'total' => 'decimal:2',
    ];
}
