<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CriptomoedaController;

Route::get('/', function(){return response()->json(['Sucesso'=>true]);}); 
Route::get('/cripto',[CriptomoedaController::class,'index']);
Route::get('/cripto/{id}', [CriptomoedaController::class,'show']);

Route::post('/cripto',[CriptomoedaController::class,'store']);

Route::put('/cripto/{id}',[CriptomoedaController::class,'update']);

Route::delete('/cripto/{id}',[CriptomoedaController::class,'destroy']);
