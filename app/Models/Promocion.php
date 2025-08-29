<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        '1persona',
        '2persona',
        '3persona',
        'medio_mes',
        'trimestral',
        'semestral',
        'zumba',
        'medio_z'
    ];
}
