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
}
