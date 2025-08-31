<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'pago_e',
        'pago_qr',
        'fecha_venta',
        'user_id',
        'item_id'
    ];
}
