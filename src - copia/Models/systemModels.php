<?php

require 'conexion\conexion.php';


session_start();

$name = $_POST["name"];
$password = $_POST["password"];
 
$sql = "SELECT * FROM users WHERE Name = '$name' AND password = '$password'";
$resultado = $conexion->query($sql);

$row = $resultado->fetch_assoc();
if ($row['name'] == $name && $row['password'] == $password) {
    $_SESSION['name'] = $name;

    header("Location: Views/dashboardViews.php");
}else{
    header("Location: Views.systemViews.html");
}


?>