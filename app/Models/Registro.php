<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $fillable = [
        'fotografia',
        'nombre',
        'apellidoP',
        'apellidoM',
        'direccion',
        'nivel',
        'horario',
        'telefono',
        'edad',
        'dias',
        'correo',
    ];
}
