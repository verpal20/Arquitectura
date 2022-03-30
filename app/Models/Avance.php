<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avance extends Model
{
    use HasFactory;
    protected $fillable =[
        'nombre',
        'fecha_inicio',
        'descripcion',
        'fecha_finalizacion',
        'precio',
        'recurso_id',
    ];
}
