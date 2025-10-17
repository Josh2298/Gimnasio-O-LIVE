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
        'userclient_id'
    ];

    public function scopeDetalle($query){
        return $query
                     ->join('users as vendedor','vendedor.id','=','ventas.user_id')
                     ->join('users as cliente','cliente.id','=','ventas.userclient_id')
                     ->select('ventas.id','vendedor.id as vendedor_id','vendedor.nombre as nombre_vendedor','cliente.id as cliente_id','cliente.nombre as nombre_cliente','ventas.pago_e','ventas.pago_qr','ventas.fecha_venta');
    }
}
