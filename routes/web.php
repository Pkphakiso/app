<?php

use App\Http\Controllers\PizzaController;
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

Route::get('/app', function () {
    return view('contents.welcome');
});

Route::get('/pizza', [PizzaController::class , 'index' ] )->name('test');
Route::get('/pizza/create', [PizzaController::class , 'create' ] );
Route::get('/pizza/{id}', [PizzaController::class , 'show' ] );
Route::post("/pizza",[PizzaController::class , "store"]);

Route::delete("/pizza/{id}", [PizzaController::class ,"destroy"]);
