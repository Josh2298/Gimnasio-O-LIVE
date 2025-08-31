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
}
