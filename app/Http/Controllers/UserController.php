<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Pizza;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id){
        $pizza = Pizza::find($id);
        return $pizza;
    }

    
    public function create(){

        return "created..";
    }
}
