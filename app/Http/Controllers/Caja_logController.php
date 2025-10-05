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

    public function destroy($id){
        $caja_logs=Caja_log::find($id);
        if($caja_logs){
            $caja_logs->delete();
            return $this->index();
        }
        else
            return response()->json('No existe el registro de caja', 409);
    }

    public function store(Request $request){
        $caja_logs=Caja_log::create($request->all());
        return $this->index();
    }

    public function update(Request $request,$id){
        $caja_logs=Caja_log::find($id);
        if($caja_logs){
            $caja_logs->update($request->all());
            return $this->index();
        }
        else{
            return response()->json('No existe el registro de caja',409);
        }
    }
}
