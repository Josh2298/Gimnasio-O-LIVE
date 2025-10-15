<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'cantidad',
        'precio',
        'detalle',
        'producto_id',
        'promocion_id',
        'venta_id'
    ];
    public function scopeDetalle($query,$id){
        return $query
                     ->join('productos','productos.id','items.producto_id')
                     ->join('categorias','categorias.id','productos.categoria_id')
                     ->select('categorias.tipo','productos.nombre','items.cantidad','items.precio','items.detalle')
                     ->where('items.venta_id',$id)
                     ->get();
    }
}
