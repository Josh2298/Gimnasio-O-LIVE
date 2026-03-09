<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /* public function index(){
        $users=User::get(); //select * from users
        return response()->json($users); 
    }//CRUD */

    public function index(Request $request)
    {
        if ($request->has('rol')) {
            $users = User::where('rol', $request->rol)->get();
            return response()->json($users);
        } 
        else{
            return response()->json([
            'error' => 'Debe especificar el parámetro rol'], 400);
        }
    }

    public function destroy(Request $request,$id){
        $user=User::find($id);
        if($user){
            $user->delete();
            return $this->index($request);
        }
        else
            return response()->json('No existe el usuario', 409);
    }

    public function store(Request $request){
        $user=User::create($request->all());
        return $this->index($request);
    }

    public function update(Request $request,$id){
        $user=User::find($id);
        if($user){
            if($request->filled('imagen')){
                $user->update($request->all());
            }
            else{
                $user->update($request->except('imagen'));
            }
            return $this->index($request);
        }
        else{
            return response()->json('No existe el usuario',409);
        }
    }

    public function imageUpload(Request $request){
        $imagen=$request->file('image');
        $path_img='usuario';
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
            return response()->download(public_path('storage').'/usuario/'.$nombre,$nombre);
        }
        catch(\Exception $exception){
            return response()->json("error",400);
        }
    }
}
