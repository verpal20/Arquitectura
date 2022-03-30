<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    use HasFactory;
    
    protected $filliable=[
    'nombre_recurso',
    'tipo',
    'fecha_recurso'
];
}
