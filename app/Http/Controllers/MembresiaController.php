<?php

namespace App\Http\Controllers;

use App\Models\Membresia;
use Illuminate\Http\Request;

class MembresiaController extends Controller
{
    public function index(){
        $membresias=Membresia::get(); //select * from membresias
        return response()->json($membresias); 
    }//CRUD

    public function destroy($id){
        $membresias=Membresia::find($id);
        if($membresias){
            $membresias->delete();
            return $this->index();
        }
        else
            return response()->json('La Membresia no existe',409);
    }

    public function store(Request $request){
        $membresias=Membresia::create($request->all());
        return $this->index();
    }

    public function update(Request $request,$id){
        $membresias=Membresia::find($id);
        if($membresias){
            $membresias->update($request->all());
            return $this->index();
        }
        else{
            return response()->json('No existe la membresia',409);
        }
    }
}
