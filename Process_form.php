<?php

    
    if(isset ($_POST['nombre'])){

        $name = $_POST['nombre'];
        $age = $_POST['password'];

        session_start();
        $_SESSION['mi_session'] = "session 1";
        $_SESSION['usuario_en_sesion'] = $name;
        $_SESSION['count'] = 1;

        echo $_SESSION['mi_session'];
        echo $_SESSION['usuario_en_sesion'];
        echo $_SESSION['count'];

        echo $_SESSION['count'];
    }

?>