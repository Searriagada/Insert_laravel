<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class userController extends Controller
{
    public function vistaInsertUser(){
        return view('user/InsertUser'); 
    }

    public function ListadoUsuario(){
       $usuario = Usuario::all();
        return view('user/ListUser',[
            'usuario' =>$usuario
        ]);
    }

    public function InsertUser(Request $request){
       $usuario = new Usuario;
       $usuario->nombre_usuario =$request->nombre;
       $usuario->correo_usuario =$request->correo;
       $usuario->clave_usuario=$request->clave;
       $usuario->save();
        return "Usuario ingresado con éxito";
    }
}