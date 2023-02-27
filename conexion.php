<?php

    define('USER', 'ROOT');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'login');

    try {

        $conexion = new PDO("mysql:host".HOST."dbname=".DATABASE, USER, PASSWORD);

    }catch(PDOException $e){
        exit("Eroor: " .$e-> getMessage());

    }

?>
