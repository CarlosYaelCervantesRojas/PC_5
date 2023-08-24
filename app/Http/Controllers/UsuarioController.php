<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
       return Usuario::all();
    }

    public function create(Request $body){
        $nuevoUsuario = new Usuario();

        $nuevoUsuario->nombre = $body->nombre;
        $nuevoUsuario->apellido = $body->apellido;
        $nuevoUsuario->email = $body->email;
        $nuevoUsuario->contrasena = $body->contrasena;

        $nuevoUsuario->save();

        return view('mostrar');
    }
}
