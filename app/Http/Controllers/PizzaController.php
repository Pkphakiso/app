<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function setUser(){
        return "Pizza created..";
    }
    public function index(){
        
        $pizza = Pizza::all();
        //$pizza = Pizza::orderBy("name","desc")->get();
        //$pizza = Pizza::where("price","100")->get();
        return  view("pizza.index", ["pizza"=>$pizza]);;
    }

    public function show($id){
        
        $pizza = Pizza::find($id);
        return  view("pizza.show", ["pizza" => $pizza]);
    }

    public function create(){

        return view("pizza.create", []);
    }
    public function store(){
       
        $pizza = new Pizza();
        $pizza->name = request("name");
        $pizza->price = request("price");
        $pizza->topping = request("topping");
        $pizza->save();
        //error_log(request("topping")); // this error-log works for string not arrays 
        //return request("topping"); //
        return redirect("/pizza")->with("success","pizza added"); //session message
    }
    public function destroy($id){

        $pizza = Pizza::find($id);
       // error_log($pizza->name);
        $pizza->delete();
       return redirect("/pizza");
       
    }

    public function edit(){
        return "edit item";
    }
    
}
