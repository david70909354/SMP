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
    <div class="container">
        <?php if (!empty($user)): ?>
            <div class="welcome">Bienvenido, <?= $user['email']; ?></div>
            <p>Has iniciado sesión exitosamente.</p>
            <a href="logout.php" class="logout">Cerrar sesión</a>
        <?php else: ?>
            <h1>
                <img src="spmm.png" alt="SOCIEDAD DE MEJORAS PUBLICAS DE MARINILLA" class="logo"><br>
                SOCIEDAD DE MEJORAS PUBLICAS DE MARINILLA
            </h1>
            <div class="menu">
                <a href="login.php"><i class="fas fa-sign-in-alt"></i> Ingreso</a>
                <a href="signup.php"><i class="fas fa-user-plus"></i> Registro</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>



