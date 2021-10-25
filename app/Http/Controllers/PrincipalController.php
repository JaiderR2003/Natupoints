<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class PrincipalController extends Controller{
    public function __invoke(){
        //return "Ruta coordinada por Controlador"; 
        return view('secundario');
    }

    public function indexone(){
        return view('IndexNatu');
    }

    public function mapa(){
        return view('Mapa');
    }
    
    public function registraru(){
        return view('RegistrarU');
    }

    public function registrarz(){
        return view('RegistrarZ');
    }

    public function tierraB(){
        return view('Tierrab');
    }

    /*public function datos(Request $request){

        $registro = new App\Models\Article();

        $registro->NombreEmpresa = $request['NombreEmpresa'];
        $registro->Ruc = $request['Ruc'];
        $registro->DireccionPrincipal = $request['DireccionPrincipal'];

        $registro->save();

        return "Empresa registrada";
    }*/
}