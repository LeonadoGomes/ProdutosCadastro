<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cadastroDeProdutos;
use App\Http\Controllers\loginUser;


Route::get('/', [cadastroDeProdutos::class, 'index']);
Route::get('/products/cadastro', [cadastroDeProdutos::class, 'cadastro']);
Route::post('/products', [cadastroDeProdutos::class, 'store']);
Route::get('/', [cadastroDeProdutos::class, 'buscar']);
Route::delete('/products/{id}', [cadastroDeProdutos::class, 'destroy']);
Route::get('/products/edit/{id}', [cadastroDeProdutos::class, 'edit']);
Route::put('/products/update/{id}', [cadastroDeProdutos::class, 'update']);
Route::get('/login/cadastroUser', [loginUser::class, 'register']);
Route::post('/register', [loginUser::class, 'userregistration']);
Route::get('/login/listagemDeUsuario', [loginUser::class, 'listregister']);
Route::delete('/cadastro/{id}', [loginUser::class, 'destroy']);
Route::get('/login/edit/{id}', [loginUser::class, 'edit']);
Route::put('/login/update/{id}', [loginUser::class, 'update']);
