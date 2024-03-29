<?php

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

Route::get('/', function () {
    return view('demo');
});

Route::get('/alcaldia',function(){
    return view('alcaldia');
});

Route::get('/departamento',function(){
    return view('departamento');
});

Route::get('/aduana/{codigo}', function($codigo){
    return "El codigo ingresado es: ".$codigo;
});
