<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cadastroDeProdutos;


Route::get('/', [cadastroDeProdutos::class, 'index']);
Route::get('/products/cadastro', [cadastroDeProdutos::class, 'cadastro']);
Route::post('/products', [cadastroDeProdutos::class, 'store']);
Route::get('/', [cadastroDeProdutos::class, 'buscar']);
Route::delete('/products/{id}', [cadastroDeProdutos::class, 'destroy']);
Route::get('/products/edit/{id}', [cadastroDeProdutos::class, 'edit']);
Route::put('/products/update/{id}', [cadastroDeProdutos::class, 'update']);
