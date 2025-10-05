<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index(){
        $ventas=Venta::get(); //select * from ventas
        return response()->json($ventas); 
    }//CRUD

    public function destroy($id){
        $ventas=Venta::find($id);
        if($ventas){
            $ventas->delete();
            return response()->json('Venta Eliminada',200);
        }
        else
            return response()->json('No existe la Venta', 409);
    }

    public function store(Request $request){
        $ventas=Venta::create($request->all());
        return response()->json($ventas);
    }

    public function update(Request $request,$id){
        $ventas=Venta::find($id);
        if($ventas){
            $ventas->update($request->all());
            return $this->index();
        }
        else{
            return response()->json('No existe la venta',409);
        }
    }
}
