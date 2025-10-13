<?php

namespace App\Http\Controllers;

use App\Models\Caja;
use Illuminate\Http\Request;

class CajaController extends Controller
{
    public function index(){
        $cajas=Caja::get(); //select * from cajas
        return response()->json($cajas); 
    }//CRUD

    public function destroy($id){
        $cajas=Caja::find($id);
        if($cajas){
            $cajas->delete();
            return $this->index();
        }
        else
            return response()->json('No existe la caja', 409);
    }

    public function store(Request $request){
        $cajas=Caja::create($request->all());
        return $this->index();
    }

    public function update(Request $request,$id){
        $cajas=Caja::find($id);
        if($cajas){
            $cajas->update($request->all());
            return $this->index();
        }
        else{
            return response()->json('No existe la caja',409);
        }
    }
}
