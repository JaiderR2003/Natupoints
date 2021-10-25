@extends ('Layout.plantillaN')

@section ('titulo','Registrar')

@section ('Contenido')
  
<br>
    <div class="formularioR">
        <form action="{{ route('usuarios.update',$dato->id) }}" method="POST" class="formularioT">
        @csrf
        @method('PUT')
            <legend class="TituloReg">&nbsp Editar Usuario </legend>
            <p id="textopq">&nbsp&nbsp&nbsp&nbsp Es rapido y facil </p>
            <input type="text" placeholder=" Nombres " name="nombres" class="cajitasW" value="{{$dato->Nombres}}" required><br><br>
            <input type="text" placeholder=" Apellidos " name="apellidos" class="cajitasW" value="{{$dato->Apellidos}}" required><br><br>
            <p style="size: 10px;"> Fecha de Nacimiento </p>
            <input type="text" placeholder=" AAAA-MM-DD " name="fecha" class="cajitasW" value="{{$dato->Fecha_Nacimiento}}" required><br><br>
            <input type="text" placeholder="  Numero de telefono " name="numb" class="cajitasW" value="{{$dato->Telefono}}" required><br><br>
            <input type="email" placeholder="  Correo electronico " name="email" class="cajitasW" value="{{$dato->Correo}}" required><br><br>
            <input type="password" placeholder="  Contraseña " name="pass" class="cajitasW" value="{{$dato->Contraseña}}" required><br><br><br>
            </select>
            <input type="submit" name="registro" value="Editar" class="boton"><br><br>
        </form>
    </div>
    <br><br><br><br><br>

@endsection