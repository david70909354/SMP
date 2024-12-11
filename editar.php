<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
      include 'conexion.php';

      $sql = "SELECT * FROM libros";
      $enlace = mysqli_connect("localhost", $username, $password, "usuarios");
      $resultado = mysqli_query($enlace, $sql);

      if (!$resultado) {
          die('Error en la consulta: ' . mysqli_error($enlace));
      }

      mysqli_close($enlace); 
    ?>

    <div>
        <table>
            <thead>
                <tr>
                    <td>Titulo</td>
                    <td>Autor</td>
                    <td>Editorial</td>
                    <td>Precio</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
                    <tr>
                        <td><?php echo $fila['Titulo']; ?></td>
                        <td><?php echo $fila['Autor']; ?></td>
                        <td><?php echo $fila['Editorial']; ?></td>
                        <td><?php echo $fila['Precio']; ?></td>
                        <td>
                            <a href="#">Editar</a>
                            <a href="#">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
