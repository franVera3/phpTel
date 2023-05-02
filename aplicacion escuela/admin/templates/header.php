<?php 
$url_base="http://localhost/ejercicios/aplicacion%20escuela/admin/";
?>
<!doctype html>
<html lang="en">

<head>
    <title>Administrador del sitio web</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="#" aria-current="page">Administracion
                    <a class="nav-item nav-link" href="<?php echo $url_base?>secciones/service">Servicios</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base?>secciones/portafolio">Portafolio</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base?>secciones/entry">Entradas</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base?>secciones/team">Equipo</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base?>secciones/config">Configuraciones</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base?>secciones/users">Usuarios</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base?>/login.php"">Cerrar sesion</a>
            </div>
        </nav>
    </header>
    <main class="container">
        <br>