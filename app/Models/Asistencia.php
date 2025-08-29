<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'ingreso',
        'casillero',
        'hora_ing',
        'hora_sal',
        'rol',
        'limpieza',
        'user_id'
    ];
}
