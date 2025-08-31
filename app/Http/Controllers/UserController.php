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
}
