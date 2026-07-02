<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CajaLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'ingreso_efectivo',
        'ingreso_qr',
        'egreso',
        'descripcion',
        'fecha',
        'caja_id',
        'user_id',
        'admin_id'
    ];
}
