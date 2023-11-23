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
    <title>Crear CV</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40;
            color: #fff;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #007bff;
            margin-right: 20px;
        }

        .container {
            margin-top: 20px;
        }

        .form-group label {
            color: #007bff;
        }

        .form-control {
            background-color: #343a40;
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .upload-box {
            background-color: #007bff;
            color: #fff;
            padding: 5px;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
            display: inline-block;
        }

        .upload-box label {
            margin: 0;
            color: #fff;
        }

        .upload-box input {
            display: none;
        }

        #previewImage {
            max-width: 100px;
            max-height: 100px;
            margin-top: 10px;
            display: none;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="container mt-3">
    <div class="row">
        <div class="col-md-6">
            <h2>Crear Curriculum Vitae</h2>
        </div>
        <div class="col-md-6 text-right">
            <!-- Cuadro para agregar imagen -->
            <div class="upload-box">
                <label for="fileInput">Agregar Imagen</label>
                <input type="file" id="fileInput">
                <img id="previewImage" src="#" alt="Preview">
            </div>
        </div>
    </div>

    <form action="guardar_cv.php" method="post">
        <!-- Campos del CV -->
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required>
        </div>
        <div class="form-group">
            <label for="experiencia">Experiencia Laboral:</label>
            <textarea class="form-control" id="experiencia" name="experiencia" rows="4" required></textarea>
        </div>
        <!-- Otros campos del CV -->
        <div class="form-group">
            <label for="educacion">Educación:</label>
            <input type="text" class="form-control" id="educacion" name="educacion" required>
        </div>
        <div class="form-group">
            <label for="habilidades">Habilidades:</label>
            <textarea class="form-control" id="habilidades" name="habilidades" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="idiomas">Idiomas:</label>
            <input type="text" class="form-control" id="idiomas" name="idiomas" required>
        </div>
        <!-- Puedes agregar más campos aquí -->

        <button type="submit" class="btn btn-primary">Guardar CV</button>
    </form>
</div>

<!-- Sidebar (puedes copiar el código del sidebar del archivo home.php) -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Obtener elementos del DOM
        var fileInput = document.getElementById("fileInput");
        var previewImage = document.getElementById("previewImage");

        // Escuchar cambios en el input de tipo archivo
        fileInput.addEventListener("change", function () {
            var file = fileInput.files[0];
            if (file) {
                // Crear objeto FileReader para leer el contenido del archivo
                var reader = new FileReader();

                // Cuando se carga la imagen, asignarla al src del elemento img
                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                    previewImage.style.display = "block"; // Mostrar la imagen

                    // Ocultar el texto del label
                    document.querySelector('.upload-box label').style.display = 'none';
                };

                // Leer el contenido del archivo como una URL de datos
                reader.readAsDataURL(file);
            }
        });
    });
</script>

</body>
</html>
