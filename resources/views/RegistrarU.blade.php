@extends ('Layout.plantillaN')

@section ('titulo','Registrar')

@section ('Contenido')
  
<br>
    <div class="formularioR">
        <form action="{{ route('Registro.crear') }}" method="POST" class="formularioT">
        @csrf
            <legend class="TituloReg">&nbsp Registrate </legend>
            <p id="textopq">&nbsp&nbsp&nbsp&nbsp  Es rapido y facil </p>
            <input type="text" placeholder=" Nombres " name="nombres" class="cajitasW" required><br><br>
            <input type="text" placeholder=" Apellidos " name="apellidos" class="cajitasW" required><br><br>
            <p style="size: 10px;"> Fecha de Nacimiento </p>
            <input type="text" placeholder=" AAAA-MM-DD " name="fecha" class="cajitasW" required><br><br>
            <input type="text" placeholder="  Numero de telefono " name="numb" class="cajitasW" required><br><br>
            <input type="email" placeholder="  Correo electronico " name="email" class="cajitasW" required><br><br>
            <input type="password" placeholder="  Contraseña " name="pass" class="cajitasW" required><br><br><br>
            </select>
            <input type="submit" name="registro" value="Registrarse" class="boton"><br><br>
        </form>
    </div>
    <br><br><br><br><br>

@endsection