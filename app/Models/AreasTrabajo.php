<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreasTrabajo extends Model
{
    use HasFactory;

    protected $table = 'areas_trabajo';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function subareas(){

        return $this->hasMany(SubareaTrabajo::class, 'area_trabajo_id');
    }

/*
Para hacer una 

*/

}
