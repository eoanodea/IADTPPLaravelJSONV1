<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function AuthRouteAPI(Request $request){
        return $request->user();
     }

     public function getAllUsers() {
        return User::all();
    }

}
