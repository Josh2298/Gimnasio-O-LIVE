<?php

namespace App\Http\Controllers;

use App\Models\CajaLog;
use Illuminate\Http\Request;

class CajaLogController extends Controller
{
    public function index(){
        $caja_logs=CajaLog::get(); //select * from caja_logs
        return response()->json($caja_logs); 
    }//CRUD

    public function destroy($id){
        $caja_logs=CajaLog::find($id);
        if($caja_logs){
            $caja_logs->delete();
            return $this->index();
        }
        else
            return response()->json('No existe la caja log', 409);
    }

    public function store(Request $request){
        $caja_logs=CajaLog::create($request->all());
        return $this->index();
    }

    public function update(Request $request,$id){
        $caja_logs=CajaLog::find($id);
        if($caja_logs){
            $caja_logs->update($request->all());
            return $this->index();
        }
        else{
            return response()->json('No existe la caja log',409);
        }
    }
}
