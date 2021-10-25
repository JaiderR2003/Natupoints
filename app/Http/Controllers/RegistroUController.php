<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models;

use App\Models\Usuario;

class RegistroUController extends Controller
{
    public function crear(Request $request){
        // return $request->all();

        $nuevo= new Usuario;
        $nuevo->Nombres = $request->nombres;
        $nuevo->Apellidos = $request->apellidos;
        $nuevo->Fecha_Nacimiento = $request->fecha;
        $nuevo->Telefono = $request->numb;
        $nuevo->Correo = $request->email;
        $nuevo->Contraseña = $request->pass;

        $nuevo->save();

        return redirect('/usuarios');
    }
}
