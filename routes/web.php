<?php

use App\Models\Usuario;
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
    return view('welcome');
});

Route::get('/agregar', function(){
    return view('agregar');
});

Route::get('/mostrar', function () {
    $usuarios = Usuario::all();
    return view('mostrar', compact('usuarios'));
});