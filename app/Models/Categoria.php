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
                     ->select('categorias.tipo','productos.*')
                     ->where('categorias.id',$id);
    }
}
