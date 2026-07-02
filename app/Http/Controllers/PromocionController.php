<?php

namespace App\Http\Controllers;

use App\Models\Promocion;
use App\Models\PromocionPrecio;
use Illuminate\Http\Request;

class PromocionController extends Controller
{
    public function index(){
        $promociones=Promocion::get(); //select * from users
        return response()->json($promociones); 
    }//CRUD

    public function destroy($id){
        $promociones=Promocion::find($id);
        if($promociones){
            $promociones->delete();
            return $this->index();
        }
        else
            return response()->json('No existe la Promocion', 409);
    }

    public function store(Request $request){
        $promociones=Promocion::create($request->all());
        return $this->index();
    }

    public function update(Request $request,$id){
        $promociones=Promocion::find($id);
        if($promociones){
            $promociones->update($request->all());
            return $this->index();
        }
        else{
            return response()->json('No existe la promocion',409);
        }
    }
    public function precioPromocion(Request $request)
    {
        $cantidad = $request->cantidad_personas;
        $precio = PromocionPrecio::where('promocion_id', $request->promocion_id)
            ->where('min_personas', '<=', $cantidad)
            ->where(function ($q) use ($cantidad) {
                $q->where('max_personas', '>=', $cantidad)
                ->orWhereNull('max_personas');
            })
            ->orderByDesc('min_personas')
            ->first();
        if(!$precio)
        {
            return response()->json([
                'precio' => 0
            ]);
        }
        return response()->json([
            'precio' => $precio->precio
        ]);
    }
}
