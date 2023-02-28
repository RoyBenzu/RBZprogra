<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Cerrar sesion</title>

    <body>
        <?php
        
        session_start();

        session_destroy();
        header("Location: Formulario.html");
        
        ?>
    </body>
</html> 