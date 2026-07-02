<?php

namespace App\Http\Controllers;

use App\Models\HistorialCorporal;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHistorial_corporalRequest;
use App\Http\Requests\UpdateHistorial_corporalRequest;

class HistorialCorporalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(HistorialCorporal::get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(StoreHistorial_corporalRequest $request)
    {
        HistorialCorporal::create($request->all());
        return $this->index();
    }

    public function update(Request $request,$id)
    {
        $historial_corporal=HistorialCorporal::find($id);
        if($historial_corporal){
            $historial_corporal->update($request->all());
            return $this->index();
        }
        else{
            return response()->json('No existe el Registro',409);
        }
    }

    public function destroy($id)
    {
        $historial_corporal=HistorialCorporal::find($id);
        if($historial_corporal){
            $historial_corporal->delete();
            return $this->index();
        }
        else
            return response()->json('No existe el Registro', 409);
    }
}