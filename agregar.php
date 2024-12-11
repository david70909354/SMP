<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor de Archivos</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Enlace a style3.css -->
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="styles2.css"> <!-- Enlace al archivo CSS externo -->
</head>
<body>
    <h1>Gestor de Archivos</h1>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="custom_name" placeholder="Nombre del archivo" required>
        <input type="file" name="file" required>
        <button type="submit">Subir Archivo</button>
    </form>
    <a href="inicio.php">Inicio</a>
</body>
</html>
