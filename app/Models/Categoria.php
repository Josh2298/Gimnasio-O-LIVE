<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'tipo'
    ];
    
    public function scopeProductos($query,$id){
        return $query
                    ->join('productos','categorias.id','productos.categoria_id')
                    ->select('categorias.tipo','productos.nombre','productos.imagen','productos.precio_compra','productos.precio_venta',
                             'productos.cantidad_min','productos.stock','productos.cantidad_min')
                    ->where('categorias.id',$id)
                    ->get();
    }
}
