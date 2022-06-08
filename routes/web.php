<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('imobiliaria');});
Route::get('/casas', function () {return view('casas');});
Route::get('/apartamentos', function () {return view('apartamentos');});
Route::get('/cadastro_cliente', function () {return view('cadastro_cliente');});
Route::get('/login', function () {return view('login');});
Route::get('/meus_imoveis', function () {return view('meus_imoveis');});
Route::get('/sair', function () {return view('sair');});
