<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_factura',
        'cliente_id',
        'fecha_emision',
        'fecha_vencimiento',
        'total',
        'estado',
        'observacion'
    ];
}
