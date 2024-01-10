<?php

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', function () {
    return view('contents.register');
});


Route::get('/pizza', [PizzaController::class , 'index' ] )->name('test');

Route::get('/pizza/create', [PizzaController::class , 'create']);

Route::post("/pizza", [PizzaController::class , "store"]);

Route::get('/pizza/{id}', [PizzaController::class , 'show']);

Route::delete("/pizza/{id}", [PizzaController::class ,"destroy"])->name("pizza.destroy");

Route::get("/pizza/{id}/edit", [PizzaController::class ,"edit"]);
Route::put("/pizza/{id}/update", [PizzaController::class ,"update"])->name("pizza.update");

Route::resource("subjects", SubjectController::class);