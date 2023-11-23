<?php
// Iniciar la sesión
session_start();

// Verificar si no hay una sesión activa, redirigir a login.php
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Incluir el archivo de conexión
include('coneccion.php');

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$experiencia = $_POST['experiencia'];
$educacion = $_POST['educacion'];
$habilidades = $_POST['habilidades'];
$idiomas = $_POST['idiomas'];

// Obtener el ID del usuario desde la sesión
$usuario_id = 3; // Actualiza esto según tu lógica

// Insertar datos en la base de datos
$query = "INSERT INTO curriculum_vitae (usuario_id, nombre, email, telefono, experiencia, educacion, habilidades, idiomas) 
          VALUES ('$usuario_id', '$nombre', '$email', '$telefono', '$experiencia', '$educacion', '$habilidades', '$idiomas')";

$resultado = mysqli_query($conn, $query);

// Verificar si la inserción fue exitosa

// Cerrar la conexión
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CV Guardado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-3">
    <div class="alert alert-success" role="alert">
        <?php
        if ($resultado) {
            echo "CV guardado exitosamente.";
        } else {
            echo "Error al guardar el CV: " . mysqli_error($conn);
        }
        ?>
    </div>
    <a href="home.php" class="btn btn-primary">Volver a Home</a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
