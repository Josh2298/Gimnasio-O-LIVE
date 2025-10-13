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

    public function destroy($id){
        $asistencias=Asistencia::find($id);
        if($asistencias){
            $asistencias->delete();
            return $this->index();
        }
        else
            return response()->json('No existe la asistencia', 409);
    }

    public function store(Request $request){
        $asistencias=Asistencia::create($request->all());
        return $this->index();
    }

    public function update(Request $request,$id){
        $asistencias=Asistencia::find($id);
        if($asistencias){
            $asistencias->update($request->all());
            return $this->index();
        }
        else{
            return response()->json('No existe la asistencia',409);
        }
    }
}
