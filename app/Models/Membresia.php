<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'plan',
        'monto',
        'fecha_ini',
        'fecha_fin',
        'estado',
        'detalle',
        'disciplina',
        'ext_ini',
        'ext_fin',
        'detalle_ext',
        'user_id'
    ];
}
