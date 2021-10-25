<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Krub:400,700" rel="stylesheet"> -->
    <link  href="{{ asset('css/estilo.css')}}" rel="stylesheet">
  
</head>
<body>
<header class="header">
        <h1>Analisis y Desarrollo de Sistemas de Informacion <span>CIDE- SOACHA</span></h1>
    </header>

    <div class="nav-bg">
        <nav class="navegacion contenedor">
            <a href="#">Inicio</a>
            <a href="#">Entidad</a>
            <a href="#">Regiones</a>
            <a href="#">Contactos</a>
        </nav>
        </div>
    
@yield('contenido')
    

    <footer class="footer">
        <p>Todos los derechos reservados. Ficha 2142329 - 2142345 ADSI</p>
    </footer>


    
</body>
</html>