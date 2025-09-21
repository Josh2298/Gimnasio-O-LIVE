<?php

namespace App\Http\Controllers;

use App\Models\Promocion;
use Illuminate\Http\Request;

class PromocionController extends Controller
{
    public function index(){
        $promociones=Promocion::get(); //select * from users
        return response()->json($users); 
    }//CRUD

    public function destroy($id){
        $promociones=Promocion::find($id);
        if($promociones){
            $promociones->delete();
            return response()->json('Promocion Eliminada',200);
        }
        else
            return response()->json('No existe la Promocion', 409);
    }

    public function store(Request $request){
        $promociones=Promocion::create($request->all());
        return response()->json($promociones);
    }
}
