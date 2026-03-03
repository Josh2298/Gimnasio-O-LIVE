<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductoController extends Controller
{
    public function index(){
        $productos=Producto::get(); //select * from productos
        return response()->json($productos); 
    }//CRUD

    public function destroy($id){
        $productos=Producto::find($id);
        if($productos){
            $productos->delete();
            return $this->index();
        }
        else
            return response()->json('No existe el Producto', 409);
    }

    public function store(Request $request){
        $productos=Producto::create($request->all());
        return $this->index();
    }

    public function update(Request $request,$id){
        $productos=Producto::find($id);
        if($productos){
            $productos->update($request->all());
            return $this->index();
        }
        else{
            return response()->json('No existe el Producto',409);
        }
    }

    public function meses($gestion){
        $reportes=[];
        for($i=1;$i<=12;$i++){
            $reportes[$i]=Producto::Meses($gestion,$i)->get();
        }
        return response()->json($reportes);
    }
    public function imageUpload(Request $request){
        $imagen=$request->file('image');
        $path_img='producto';
        $imageName = $path_img.'/'.$imagen->getClientOriginalName();
        try{
            Storage::disk('public')->put($imageName, File::get($imagen));
        }
        catch (\Exception $exception){
            return response('error',400);
        }
        return response()->json(['image' => $imageName]);
    }

    public function image($nombre){
        try{
            return response()->download(public_path('storage').'/producto/'.$nombre,$nombre);
        }
        catch(\Exception $exception){
            return response()->json("error",400);
        }
    }
}
