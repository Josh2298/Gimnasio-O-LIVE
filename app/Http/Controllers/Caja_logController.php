<?php

namespace App\Http\Controllers;

use App\Models\Caja_log;
use Illuminate\Http\Request;

class Caja_logController extends Controller
{
    public function index(){
        $caja_logs=Caja_log::get(); //select * from caja_logs
        return response()->json($caja_logs); 
    }//CRUD
}
