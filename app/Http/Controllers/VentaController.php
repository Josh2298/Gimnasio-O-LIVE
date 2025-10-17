<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Item;
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
        return $this->index();
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

    public function detalle($fecha,$userId,$clienteId){
        $detalle=Venta::Detalle();
        if($fecha!=0)
            $detalle=$detalle->where('ventas.fecha_venta',$fecha);
        if($userId!=0)
            $detalle=$detalle->where('vendedor.id',$userId);
        if($clienteId!=0)
            $detalle=$detalle->where('cliente.id',$clienteId);
        $detalle=$detalle->get();
        $i=0;
        foreach($detalle as $item){
            $id=$item->id;
            $detalle[$i]->items=Item::Detalle($id);
            $i++;
        }
        return response()->json($detalle);
    }
}
