<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido usuario - Sociedad de Mejoras Públicas de Marinilla</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <?php if (!empty($user)): ?>
        <br> Bienvenido, <?= htmlspecialchars($user['email']); ?>
        <br>Has iniciado sesión exitosamente.
        <a href="logout.php" class="logout">Cerrar sesión</a>
    <?php else: ?>
        <h1>
            <img src="spmm.png" alt="SOCIEDAD DE MEJORAS PÚBLICAS DE MARINILLA" class="logo"> 
            SOCIEDAD DE MEJORAS PÚBLICAS DE MARINILLA
        </h1>
        <div class="menu">
            <a href="index.php"><i class="fas fa-home"></i>Inicio</a>
            <a href="lista2.php"><i class="fas fa-file-alt"></i>Lista de archivos</a>
            <a href="buscar.php"><i class="fas fa-search"></i>Buscar archivos</a>
        </div>
    <?php endif; ?>
</body>
</html>


