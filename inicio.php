<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido usuario - Sociedad de Mejoras Públicas de Marinilla</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles2.css"> <!-- Enlace al archivo CSS externo -->
</head>
<body>
<?php if (!empty($user)): ?>
    <p>Welcome. <?= htmlspecialchars($user['email']); ?></p>
    <p>You are Successfully Logged In</p>
    <a href="logout.php">Logout</a>
<?php else: ?>
    <header>
        <h1>
            <img src="spmm.png" alt="SOCIEDAD DE MEJORAS PUBLICAS DE MARINILLA" class="logo"> 
            SOCIEDAD DE MEJORAS PUBLICAS DE MARINILLA 
        </h1>
        <nav class="menu">
            <a href="index.php"><i class="fas fa-home"></i> Inicio</a>
            <a href="lista.php"><i class="fas fa-list"></i> Lista de archivos</a>
            <a href="buscar.php"><i class="fas fa-search"></i> Buscar archivos</a>
            <a href="agregar.php"><i class="fas fa-plus-circle"></i> Agregar nuevo archivo</a>
        </nav>
    </header>
<?php endif; ?>
</body>
</html>


