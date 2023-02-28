
<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'test';

    $conecxion = mysqli_connect($server, $username, $password, $database); //conexion a base de datos 

    if(!$conecxion){
        die("No hay conexion:".mysqli_connect_error()); // para que me muestre si hay algun error en la base de datos 
    }

    $name = $_POST["username"];
    $password = $_POST["password"];

    // hacer la consulta y que coincidan las datos ingresados con la base de datos 
    $query = mysqli_query($conecxion, "SELECT * FROM login WHERE username = '".$name."' and password = '".$password."'");
    $nr = mysqli_num_rows($query);

    if($nr == 1) //si la fila es 1 va a permitir el ingreso 
    {
        
        echo "<h1>Bienvenido $name</h1>";
        echo "<button><a href='cerrar_sesion.php'>Cerrar sesion</a></button>";

    }else if ($nr == 0){

        echo "<h1>Usuario o password incorrecto</h1>"; 
        echo "<button><a href='cerrar_sesion.php'>Iniciar sesion</a></button>";

    }
?>
 