<?php
// Incluir el archivo de conexión
include('coneccion.php');

// Iniciar la sesión
session_start();

// Verificar si no hay una sesión activa, redirigir a login.php
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40; /* Cambia el color de fondo según tus preferencias */
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand img {
            height: 50px; /* Ajusta la altura del logo según tus necesidades */
            margin-right: 10px; /* Ajusta el margen derecho según tus necesidades */
        }

        .navbar-light .navbar-nav .nav-link {
            color: #007bff;
            margin-right: 20px; /* Ajusta el espacio entre botones según tus preferencias */
        }

        .list-group-item {
            background-color: #343a40; /* Fondo gris */
            color: #fff;
            border: none;
            margin-bottom: 5px; /* Espacio entre elementos de la lista */
        }

        .list-group-item a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 10px; /* Puntas redondeadas */
        }

        .list-group-item a:hover {
            background-color: #007bff; /* Cambia el color de fondo al pasar el ratón */
            text-decoration: none;
        }

        .container-fluid {
            padding-top: 20px;
        }

        .center-image {
            text-align: center;
        }

        .center-image img {
            width: 70%; /* Aumento el tamaño de la imagen en un 20% */
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#"><img src="ruta_del_logo.png" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Carreras</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Estudiantes</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Empresas</a></li>
        </ul>
    </div>
</nav>

<!-- Sidebar -->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-2">
            <ul class="list-group">
                
                
                <li class="list-group-item"><a href="#">Perfil</a></li>
                <li class="list-group-item"><a href="crear_cv_formulario.php">Crear CV</a></li>
                <li class="list-group-item"><a href="#">Postulaciones</a></li>
            </ul>
        </div>

        <!-- Content -->
        <div class="col-md-10">
            <!-- Contenido principal aquí -->
            <div class="center-image">
                <img src="dos_estudiantes.jpg" alt="Dos estudiantes" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
