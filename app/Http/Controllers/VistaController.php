<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaController extends Controller{
    public function index(){
        //return "Pagina principal del Sena";
        return view('principal');
    }
    public function create(){
        return "Creando otra ruta :D ";
    }
    public function show($a){
        return "Rutas con variables $a";
    }
}
