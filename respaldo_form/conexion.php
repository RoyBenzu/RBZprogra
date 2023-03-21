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
     
    session_start();
    if(isset($_SESSION['name']) or isset($_POST["name"]) and isset($_POST["password"])){
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'test';

        $conexion = mysqli_connect($server, $username, $password, $database); 
    
        $name = $_POST["name"];
        $password = $_POST["password"];

        $query = mysqli_query($conexion, "SELECT * FROM users WHERE name = '".$name."' and password = '".$password."'");
        $nr = mysqli_num_rows($query);
        $user = $query->fetch_array();

        if(!isset($_SESSION['name'])){

            $_SESSION['name'] = $user[1];
            $_SESSION['id_authorizacion'] = $user[4];

        }
    
        $id_authorizacion = $user[4];

        if($id_authorizacion == 1){

            $sql= mysqli_query($conexion, "SELECT u.ID, u.name, a.description FROM users u LEFT JOIN authorizations a ON u.id_authorization = a.ID;");
            $result = mysqli_num_rows($sql);
            echo "<h1>Login successful! Welcome $name Rol: acounting</h1>";
            while($row = $sql->fetch_array()) {

                echo "<center><table><td>ID $row[0]</td><tr><td>Name $row[1]</td><tr><td>Athorizartion $row[2]</td><tr><br></table></center>";
        
            }

        echo "<button><a href='logout.php'>Sign out</a></button>";
        
        }else if($id_authorizacion == 2){
           
            echo "<h1>Login successful! Welcome $name Rol: acounting</h1>";
            echo "<br>";
            echo "<br>";
            echo "<center><table><td><img src = eli.jpg  </img></td><tr><td> ID 9 </td><tr><td>Name Pedro </td><tr><td> Email pedro@test.com </table></center>";
            echo "<br>";
            echo "<br>";
            echo "<center><table><td><img src = pedro.jpg </img></td><tr><td> ID 14 </td><tr><td>Name Cristina</td><tr><td> Email cristina@test.com </table></center>";
            echo "<br>";
            echo "<br>";
            echo "<center><table><td><img src = vir.jpg </img></td><tr><td> ID 23 </td><tr><td>Name Rodrigo </td><tr><td> Email rodrigo@test.com </table></center>";
            echo "<br>";
            echo "<br>";
            echo "<center><button><a href='logout.php'>Sign out</a></button>";

        }else if ($id_authorizacion == 3){
            
            echo "<center><h1>Login successful! User: $name Rol: Makerting</h1></center>"; 
            echo "<button><a href='logout.php'>Sign out</a></button>";
        
        }else if($nr == 0){

            echo "<h1>Usuario o password incorrecto</h1>"; 
            echo "<button><a href='logout.php'>Sign in</a></button>";
        }
       
    }
    
    session_destroy();
 
?>

