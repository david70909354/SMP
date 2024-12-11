<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion mysql</title>
</head>
<body>
    <?php
     $username = 'root';
     $password = '';
     $enlace = mysqli_connect("localhost", $username, $password, "usuarios");

     if (!$enlace) {
        die("No pudo conectarse: " . mysqli_connect_error());   
     }

     
    ?>
</body>
</html>