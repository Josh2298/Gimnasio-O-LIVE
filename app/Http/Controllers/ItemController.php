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
            return $this->index();
        }
        else
            return response()->json('No existe el Item', 409);
    }

    public function store(Request $request){
        $items=Item::create($request->all());
        return $this->index();
    }

    public function update(Request $request,$id){
        $items=Item::find($id);
        if($items){
            $items->update($request->all());
            return $this->index();
        }
        else{
            return response()->json('No existe el usuario',409);
        }
    }
}
