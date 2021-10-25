<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href={{ asset('Img/Icon.png')}}>
    <link rel="stylesheet" href={{ asset('Style/Estilo.css')}}>
    <title> @yield ('titulo') </title>
</head>     
<body id="fondo">
    <header>
        <a href="Index.php">
        <img src={{ asset('Img/LogoD.png')}} alt="Logo" id="logo" >
        <img src={{ asset('Img/LogoC.png')}} alt="Logo2" id="logo2">
        </a>
        <nav>
            <ul class="nav_links">
                <li> <a href="Index.php">Inicio</a> </li>
                <li> <a href="Vista/Mapa.php">Mapa</a> </li>
                <li> <a href="Vista/RegistrarZonaN.php">Nueva Zona</a> </li>
            </ul>
        </nav>
    </header>

    <section>
    
    @yield('Contenido')
    
    </section>

    <br>
    <footer id="contactos">
        <br>
        <legend id="TituContact"> Contactenos </legend><br>
        <p class="Contact"> Linea Gratuita: <b>01 8000 8888</b> </p>
        <p class="Contact"> Correo: <b>NatuPoints@gmail.com </b></p>
        <br>
    </footer>
</body>
</html>