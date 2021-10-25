<div class="formularioR">
        <form action="{{ route('formulario.crear') }}" method="POST" class="formularioT">
        @csrf
            <legend class="TituloReg">&nbsp Registrate </legend>
            <p id="textopq">&nbsp&nbsp&nbsp&nbsp  Es rapido y facil </p>
            <input type="text" placeholder=" Nombres " name="nombres" class="cajitasW" required><br><br>
            <input type="text" placeholder=" Apellidos " name="apellidos" class="cajitasW" required><br><br>
            <input type="text" placeholder=" Nro Documento " name="document" class="cajitasW" required><br><br>
            
            <input type="submit" name="registro" value="Registrarse" class="boton"><br><br>
        </form>
    </div>