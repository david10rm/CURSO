<?php
include 'headr.html';
// Recibiendo datos desde el index php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

//mostrando los datos recibidos

echo "<p> Mi nombre es:  $nombre</p>";
echo "<p> Mi edad es:  $edad</p>";
echo "<p> Mi correo es:  $correo</p>";
echo "<p> Mi contraseña es:  $contraseña</p>";
echo "<a href = 'Index.php'> Back </a>"; // Boton para regresar


?>