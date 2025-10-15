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

    public function scopeDetalle($query, $id){
        return $query
                     ->join('users as vendedor','vendedor.id','=','ventas.user_id')
                     ->join('users as cliente','cliente.id','=','ventas.userclient_id')
                     ->select('vendedor.nombre as nombre_vendedor','cliente.nombre as nombre_cliente','ventas.*')
                     ->where('ventas.id',$id)
                     ->get();
    }
}
