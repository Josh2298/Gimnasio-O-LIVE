<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $categorias=Categoria::get(); //select * from categorias
        return response()->json($categorias); 
    }//CRUD
}
