<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'precio_compra',
        'precio_venta',
        'cantidad_min',
        'stock',
        'categoria_id'
    ];

    public function scopeMeses($query,$gestion,$mes){
        $query
              ->join('categorias','categorias.id','productos.categoria_id')
              ->join('items','items.producto_id','productos.id')
              ->join('ventas','ventas.id','items.venta_id')
              ->select(
                  DB::raw('concat(categorias.tipo," ",productos.nombre) as name'),
                  DB::raw('count(*) as value')
              )
              ->whereYear('ventas.fecha_venta',$gestion)
              ->whereMonth('ventas.fecha_venta',$mes)
              ->groupBy('productos.id')
              ->groupBy('categorias.tipo')
              ->groupBy('productos.nombre')
              ->get();
        return $query;
    }
}
