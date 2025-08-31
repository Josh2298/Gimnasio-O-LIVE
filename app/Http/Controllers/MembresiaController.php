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
}
