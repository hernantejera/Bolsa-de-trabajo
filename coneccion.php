<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "proyectobolsa";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
