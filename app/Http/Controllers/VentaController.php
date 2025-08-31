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
}
