<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/login_icon.png">
    <title>Dashboard</title>
</head>
<body>
    
</body>
</html>

<?php

session_start();
$name = $_SESSION['name'];

?>

<html lang ="en">
<head></head>
    <meta charset="UTF-8">
    <meta name ="viewport" content= "width-device-width, initial-scale=1.0">
    <title> Pagina Principal </title>
</head>
<body>
    <?php echo 'Bienvenido' .$name; ?>
    <button>href=""</button>
</body>
</html>