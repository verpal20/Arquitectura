<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $fillable =[
        'nombre_proyecto',
        'tiempo_inicio',
        'tiempo_final',
        'materia_id',
        'empresa_id',
        'avance_id',
    ];
}
