<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        $items=Item::get(); //select * from items
        return response()->json($items); 
    }//CRUD

    public function destroy($id){
        $items=Item::find($id);
        if($items){
            $items->delete();
            return response()->json('Item Eliminado',200);
        }
        else
            return response()->json('No existe el Item', 409);
    }

    public function store(Request $request){
        $items=Item::create($request->all());
        return response()->json($items);
    }
}
