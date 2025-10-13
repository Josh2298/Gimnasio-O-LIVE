<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index(){
        $users=User::get(); //select * from users
        return response()->json($users); 
    }//CRUD

    public function destroy($id){
        $user=User::find($id);
        if($user){
            $user->delete();
            return response()->json('Usuario Eliminado',200);
        }
        else
            return response()->json('No existe el usuario', 409);
    }

    public function store(Request $request){
        $user=User::create($request->all());
        return response()->json($user);
    }

    public function update(Request $request,$id){
        $user=User::find($id);
        if($user){
            $user->update($request->all());
            return $this->index();
        }
        else{
            return response()->json('No existe el usuario',409);
        }
    }

    public function imageUpload(Request $request){
        $imagen=$request->file('image');
        $path_img='usuario';
        $imageName=$path_img.'/'.$imagen->getClientOriginalName();
        try{
            Storage::disk('public')->put($imageName,File::get($imagen));
        }
        catch (\Exception $exception){
            return response('error',400);
        }
        return response()->json(['image'=>$imageName]);
    }

    public function image($nombre){
        try{
            return response()->download(public_path('storage').'/usuario/'.$nombre,$nombre);
        }
        catch (\Exception $exception){
            return response()->json('error',400);
        }
    }
}
