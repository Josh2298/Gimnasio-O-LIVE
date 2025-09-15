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
            return response()->json('Membresia Eliminada',200);
        }
        else
            return response()->json('La Membresia no existe',409);
    }

    public function store(Request $request){
        $membresias=Membresia::create($request->all());
        return response()->json($membresias);
    }
}
