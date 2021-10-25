@extends ('Layout.plantillaN')

@section ('titulo','Registrar Zona')

@section ('Contenido')

    <br>
    <div class="formularioR">
        <form method="POST" class="formularioT">
            <legend class="TituloReg">&nbsp Registrar Zona </legend>
            <p id="textopq">&nbsp&nbsp&nbsp&nbsp  Es rapido y facil </p>
            <input type="text" placeholder=" Nombre " name="nombre" class="cajitasW" required><br><br>
            <input type="text" placeholder=" Ubicacion " name="ubicacion" class="cajitasW" required><br><br>
            <textarea placeholder="Descripcion" name="Descripcion" class="cajitasW" cols="30" rows="10"></textarea><br><br>
            <input type="text" placeholder=" URL Imagen " name="image" class="cajitasW" required><br><br>
            <input type="submit" name="registro" value="Registrarse" class="boton"><br><br>
        </form>
    </div>
    <br><br><br><br><br><br>

@endsection