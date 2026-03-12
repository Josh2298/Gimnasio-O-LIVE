<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $table = 'promociones';
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'p1persona',
        'p2persona',
        'p3persona',
        'medio_mes',
        'trimestral',
        'semestral',
        'zumba',
        'medio_z'
    ];
}
