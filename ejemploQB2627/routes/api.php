<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\micontrolador;

Route::get('/user/{dni}',[micontrolador::class,'getUser']);
Route::post('user',[micontrolador::class,'postUser']);
Route::get('/',[micontrolador::class,'listar']);
