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

    public function destroy($id){
        $categorias=Categoria::find($id);
        if($categorias){
            $categorias->delete();
            return response()->json('Categoria Eliminada',200);
        }
        else
            return response()->json('No existe categoria',409);
    }

    public function store(Request $request){
        $categorias=Categoria::create($request->all());
        return response()->json($categorias);
    }
}
