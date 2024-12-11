<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido usuario - Sociedad de Mejoras Públicas de Marinilla</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="estilos3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Style the menu buttons */
        .menu {
            display: flex;
            justify-content: center; /* Center the buttons horizontally */
            margin-top: 20px;
        }

        .menu a {
            margin: 5px;
            text-decoration: none;
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }

        .menu a i {
            margin-right: 8px;
        }

        .logo {
            height: 250px; /* Altura deseada */
            vertical-align: middle; /* Alinear verticalmente */
        }
    </style>
</head>
<body>
    <?php if (!empty($user)): ?>
        <p>Welcome, <?= htmlspecialchars($user['email']); ?></p>
        <p>You are Successfully Logged In</p>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <h1><img src="SPM.png" alt="SOCIEDAD DE MEJORAS PUBLICAS DE MARINILLA" class="logo"> SOCIEDAD DE MEJORAS PUBLICAS DE MARINILLA</h1>
        <div class="menu">
            <a href="login.php"><i class="fas fa-sign-in-alt"></i> Ingreso</a>
            <a href="signup.php"><i class="fas fa-user-plus"></i> Registro</a>
            <a href="libros.php"><i class="fas fa-book"></i> Libros</a>
            <a href="buscar.php"><i class="fas fa-search"></i> Buscar</a>
        </div>
    <?php endif; ?>
</body>
</html>
