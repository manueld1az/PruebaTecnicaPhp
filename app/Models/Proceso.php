<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    use HasFactory;

    protected $fillable = [
        'objeto',
        'actividad',
        'descripcion',
        'moneda',
        'presupuesto',
        'fecha_inicio',
        'hora_inicio',
        'fecha_cierre',
        'hora_cierre'
    ];
}
