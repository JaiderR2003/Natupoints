<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Models\Formulario;

class FormularioController extends Controller
{
    public function crear(Request $request){
        // return $request->all();

        $nuevo= new Formulario;
        $nuevo->Nombre = $request->nombres;
        $nuevo->Apellido = $request->apellidos;
        $nuevo->Numero_Documento = $request->document;

        $nuevo->save();

        return view('Formulario');
    }

    public function inicio(){
        return view('Formulario');
    }
}
