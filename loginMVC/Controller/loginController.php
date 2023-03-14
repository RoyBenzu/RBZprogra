<?php
require_once("loginModel.php");

class LoginControlador {
    public function procesar_login() {
        $name = $_POST['name'];
        $password= $_POST['password'];

        $loginModel = new LoginModel();
        $user = $loginModel->validate_credencials($name, $password);

        if ($user = true) {
            header("Location: inicio.php");
            exit();
        } else {
            echo "Credenciales inválidas.";
        }
    }
}
?>
