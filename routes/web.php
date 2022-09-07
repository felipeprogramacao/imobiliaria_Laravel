<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasaController;

Route::get('/',[CasaController::class,'index']);

Route::get('/imoveis',[CasaController::class,'imoveis']);

Route::get('/cadastro',[CasaController::class,'create']);

Route::post('/enviar',[CasaController::class,'store']);

Route::get('/deletar/{id}',[CasaController::class,'remove']);

Route::get('/editar/{id}',[CasaController::class,'edit']);

Route::put('/update/{id}',[CasaController::class,'update']);



