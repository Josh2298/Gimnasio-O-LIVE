<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function index(){
        $asistencias=Asistencia::get(); //select * from asistencias
        return response()->json($asistencias); 
    }//CRUD
}
