<?php
     
     $name = $_POST["name"];
     $password = $_POST["password"];
 
     
     $query = mysqli_query($conexion, "SELECT * FROM users WHERE name = '".$name."' and password = '".$password."'");
     $nr = mysqli_num_rows($query);
 
     if ($nr == 1){
         echo "<h1>Bienvenido $name</h1>";
         echo "<button><a href='cerrar_sesion.php'>Cerrar sesion</a></button>";
 
     }else if($nr == 0){
         echo "<h1>Usuario o password incorrecto</h1>"; 
         echo "<button><a href='cerrar_sesion.php'>Iniciar sesion</a></button>";
     }

?>