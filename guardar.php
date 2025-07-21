<?php 

// Nos conectamos a la base de datos
$conexion = new mysqli("localhost", "root", "", "datosUsuario");

if($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POSRT['nombre'],
$apellido = $_POST['apellido'],
$telefono = $_POST['telefono'],
$email = $_POST['email'];


$sql = "INSERT INTO usuarios (nombre, apellido, telefono, email) 
VALUES ('$nombre', '$apellido', '$telefono', '$email')";

if($conexion->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
header("Location: index.html");
?>