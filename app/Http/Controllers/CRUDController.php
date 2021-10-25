<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Consulta;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Consulta::all();
        return view('Consultas')->with('datos',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('RegistrarU');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos= new Consulta();
        $datos->Nombres = $request->get('nombres');
        $datos->Apellidos = $request->get('apellidos');
        $datos->Fecha_Nacimiento = $request->get('fecha');
        $datos->Telefono = $request->get('numb');
        $datos->Correo = $request->get('email');
        $datos->Contraseña = $request->get('pass');

        $datos->save();

        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = Consulta::find($id);
        return view('ActualizacionUsuario')->with('dato', $dato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $dato = Consulta::findOrFail($id);

        $dato->Nombres = $request->get('nombres');
        $dato->Apellidos = $request->get('apellidos');
        $dato->Fecha_Nacimiento = $request->get('fecha');
        $dato->Telefono = $request->get('numb');
        $dato->Correo = $request->get('email');
        $dato->Contraseña = $request->get('pass');

        $dato->save();

        //return ('Se actualizo el usuario');
        //return redirect('/usuarios');
        echo "Se actualizo el usuario";
        echo "<meta http-equiv='refresh' content='2; url=/usuarios'>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dato = Consulta::findOrFail($id);        
        $dato->delete();

        echo "Se eliminó el usuario";
        echo "<meta http-equiv='refresh' content='2; url=/usuarios'>";
    }
}
