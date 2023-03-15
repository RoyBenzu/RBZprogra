<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="login_icon.png">
    <title>System Login</title>
</head>
<body>
    
</body>
</html>

<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'test';

    $conexion = mysqli_connect($server, $username, $password, $database); 

    
    $name = $_POST["name"];
    $password = $_POST["password"];

    
    $query = mysqli_query($conexion, "SELECT * FROM users WHERE name = '".$name."' and password = '".$password."'");
    $nr = mysqli_num_rows($query);

    session_start();

    if($nr == 1){

        $sql= mysqli_query($conexion, "SELECT * FROM users INNER JOIN authorizations ON users.ID = authorizations.ID");


        $result = $conexion->query($sql);
        echo "<h1>Bienvenido $name</h1>";
        while($row = $sql->fetch_array()) {
        echo $row['id']. '' .$row['name']. ''.$row['description']."<br>";
        
        }
        

    } else if ($nr == 1){
        $sql = mysqli_query($conexion, "SELECT id FROM users INNER JOIN authorizations ON id.users AND id.authorizations = 2");

        $result = $conexion->query($sql);
    
        echo "<h1>Bienvenido</h1>";
        echo "ID: " . $row["ID"]. " - name: " . $row["name"]. " - authorization: " . $row["description"]. "<br>";
        echo "<button><a href= 'logout.php'> Logout </a></button>";

    } else if ($nr == 1){
    
        $sql = mysqli_query($conexion, "SELECT id FROM users INNER JOIN authorizations ON id.users AND id.authorizations = 2");


        $result = $conexion->query($sql);
    
        echo "<h1>Bienvenido</h1>";
        echo "ID: " . $row["id"]. " - name: " . $row["name"]. " - authorization: " . $row["description"]. "<br>";
        echo "<button><a href= 'logout.php'> Logout </a></button>";

    }else if($nr == 0){

        echo "<h1>Usuario o password incorrecto</h1>"; 
        echo "<button><a href='logout.php'></a></button>";
    }
    
?>

    