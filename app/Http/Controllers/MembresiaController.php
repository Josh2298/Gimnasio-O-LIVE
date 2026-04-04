<?php

namespace App\Http\Controllers;

use App\Models\Membresia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CajaLog;

class MembresiaController extends Controller
{
    public function index(){
        $membresias=Membresia::get(); //select * from membresias
        return response()->json($membresias); 
    }//CRUD

    public function destroy($id){
        $membresias=Membresia::find($id);
        if($membresias){
            $membresias->delete();
            return $this->index();
        }
        else
            return response()->json('La Membresia no existe',409);
    }

    public function store(Request $request){
        $membresias=Membresia::create($request->all());
        return $this->index();
    }

    public function update(Request $request,$id){
        $membresias=Membresia::find($id);
        if($membresias){
            $membresias->update($request->all());
            return response()->json([
                'message' => 'Actualizado correctamente'
            ]);
        }
        else{
            return response()->json('No existe la membresia',409);
        }
    }
    public function sesiones(Request $request)
    {
        $mes = $request->mes;
        $anio = $request->anio;

        $sesiones = Membresia::whereRaw('LOWER(plan) = ?', ['sesion'])
            ->whereMonth('created_at', $mes)
            ->whereYear('created_at', $anio)
            ->get();
        $totalSesiones = $sesiones->count();
        $totalEfectivo = $sesiones->sum('p_efectivo');
        $totalQr = $sesiones->sum('p_qr');
        $totalMonto = $totalEfectivo + $totalQr;

        return response()->json([
            'data' => $sesiones,
            'totalSesiones' => $totalSesiones,
            'totalEfectivo' => $totalEfectivo,
            'totalQr' => $totalQr,
            'totalMonto' => $totalMonto
        ]);
    }
    public function store(Request $request)
{
    DB::transaction(function () use ($request) {

        Membresia::create($request->all());

        CajaLog::create([
            'ingreso' => $request->p_efectivo + $request->p_qr,
            'egreso' => 0,
            'descripcion' => 'Pago ' . $request->plan
        ]);
    });

    return response()->json(['message' => 'Pago registrado']);
}
}
