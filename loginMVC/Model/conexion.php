<?php

$server = 'localhost';
$user = 'root';
$password = ' ';
$bdName = 'test';

$conexion = mysqli_connect($server, $user, $password, $bdName);

if (!$conexion) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

/*$consulta = "SELECT * FROM tabla";
$resultado = mysqli_query($conexion, $consulta);

// Procesar los resultados de la consulta
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo $fila['campo1'] . " - " . $fila['campo2'] . "<br>";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
