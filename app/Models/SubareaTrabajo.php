<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubareaTrabajo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'area_id',
        'created_at',
        'updated_at'
    ];
}
