<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $table = 'inventarios';

    protected $fillable = [
        'folio_inventario',
        'clave_unica_producto',
        'numero_producto',
        'descripcion_producto',
        'cantidad',
        'precio_producto',
        'monto',
    ];
}
