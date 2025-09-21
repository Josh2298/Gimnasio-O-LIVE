<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $productos=Producto::get(); //select * from productos
        return response()->json($productos); 
    }//CRUD

    public function destroy($id){
        $produtos=Producto::find($id);
        if($productos){
            $productos->delete();
            return response()->json('Producto Eliminado',200);
        }
        else
            return response()->json('No existe el Producto', 409);
    }

    public function store(Request $request){
        $productos=Producto::create($request->all());
        return response()->json($productos);
    }
}
