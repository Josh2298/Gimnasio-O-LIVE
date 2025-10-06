<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caja_log extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'ingreso',
        'egreso',
        'descripcion',
        'fecha',
        'caja_id'
    ];
}
