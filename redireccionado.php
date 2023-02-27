<?php

$name = $_GET['name'];
$age = $_GET['age'];

include('conexion.php');

$query = $connection->prepare("SELECT * FROM users WHERE name=:name");
$query->bindParam("name", $name, PDO::PARAM_STR);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

session_start();

echo $result['email'];
echo $_SESSION['mi_sesion'];
echo $_SESSION['usuario_en_sesion'];
echo $_SESSION['count'];

session_destroy();


?>