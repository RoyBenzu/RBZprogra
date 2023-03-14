<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/login_icon.png">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php


    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'test';

    $conexion = mysqli_connect($server, $username, $password, $database); //conexion a base de datos 

    
    /*
    $query = mysqli_query($conexion, "SELECT * FROM users WHERE name = '".$name."' and password = '".$password."'");
    $nr = mysqli_num_rows($query);

    if ($nr == 1){
        echo "<h1>Bienvenido $name</h1>";
        echo "<button><a href='cerrar_sesion.php'>Cerrar sesion</a></button>";

    }else if($nr == 0){
        echo "<h1>Usuario o password incorrecto</h1>"; 
        echo "<button><a href='cerrar_sesion.php'>Iniciar sesion</a></button>";
    }
    */
?>

    