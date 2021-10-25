@extends ('Layout.plantillaN')

@section ('titulo', 'NatuPoints')

@section ('Contenido')

<link rel="stylesheet" href={{ asset('Style/EstiloCRUD.css')}}>

<table>
            <tr>
                <td class="vermas">
                        <h2 id="Tituconsulta">Usuarios Existentes</h2>
                    <a href="usuarios/create" class="opcion">CREAR</a><br><br>

                    <div>
                    <div>
                        <table class="table">
                        <thead>
                            <tr class="table">
                            <th class="columna">ID</th>
                            <th class="columna">Nombres</th>
                            <th class="columna">Apellidos</th>
                            <th class="columna">Fecha de nacimiento</th>
                            <th class="columna">Telefono</th>
                            <th class="columna">Correo</th>
                            <th class="columna">Contraseña</th>
                            <th class="columna">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datos as $dato)
                            <tr class="table">
                                <td class="columna">{{ $dato->id }}</td>
                                <td class="columna">{{ $dato->Nombres }}</td>
                                <td class="columna">{{ $dato->Apellidos }}</td>
                                <td class="columna">{{ $dato->Fecha_Nacimiento }}</td>
                                <td class="columna">{{ $dato->Telefono }}</td>
                                <td class="columna">{{ $dato->Correo }}</td>
                                <td class="columna">{{ $dato->Contraseña }}</td>
                                <td class="columna">
                                    <a href="{{ url('/usuarios/'.$dato->id.'/edit') }}" class="opcion">Editar</a>&nbsp
                                    <form action="{{ route('usuarios.destroy',$dato->id) }}" method="POST">
                                        @csrf 
                                        @method('DELETE')
                                        <input type="submit" value="Borrar" class="opcion2">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </td>
    </table>

        </div>
    </div>
    <br><br><br><br><br><br>

@endsection