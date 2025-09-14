<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
}
