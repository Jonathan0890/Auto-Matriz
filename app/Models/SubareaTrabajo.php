<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubareaTrabajo extends Model
{
    use HasFactory;

    protected $table = 'subareas_trabajo';

    protected $fillable = [
        'area_trabajo_id',
        'nombre',
        'descripcion',
    ];

    public function areaTrabajo()
    {
        return $this->belongsTo(AreasTrabajo::class);
    }
}
