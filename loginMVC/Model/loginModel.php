<?php

class LoginModel {
    public function validate_credencials($name, $password) {
        require_once('conexion.php');
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $password = $_POST['password'];

    
    $consult = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
    $result = mysqli_query($conexion, $consult);

    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['name'] = $name;
        header('Location: Views\loginView.php');
        exit();
    } else {
        $mensaje_error = "Nombre de usuario o contraseña incorrectos";
    }
}

      

    }
}
?>
