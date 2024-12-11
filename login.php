<?php 
require 'database.php';
session_start(); // Asegúrate de iniciar la sesión al principio del archivo

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        try {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = $_POST['password'];

            // Validar el formato del correo electrónico
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $message = 'Correo electrónico no válido.';
            } else {
                // Verificar si el usuario ya existe en la base de datos
                $existingUser = $conn->prepare('SELECT id, email, password FROM usuarios6 WHERE email = :email');
                $existingUser->bindParam(':email', $email);
                $existingUser->execute();
                $results = $existingUser->fetch(PDO::FETCH_ASSOC);

                if ($results) {
                    // El usuario existe, verificar la contraseña
                    if (password_verify($password, $results['password'])) {
                        $_SESSION['usuarios2_id'] = $results['id'];
                        // Redirigir según el correo electrónico
                        if ($email === 'administrador@gmail.com') {
                            header("Location: inicio.php"); // Redirigir a la página de administrador
                        } else {
                            header("Location: inicio3.php"); // Redirigir a la página de usuario regular
                        }
                        exit;
                    } else {
                        $message = 'Lo siento, las credenciales no coinciden';
                    }
                } else {
                    // El usuario no existe, proceder a crear uno
                    $sql = "INSERT INTO usuarios3 (email, password) VALUES (:email, :password)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':email', $email);
                    $passwordHash = password_hash($password, PASSWORD_BCRYPT);
                    $stmt->bindParam(':password', $passwordHash);

                    if ($stmt->execute()) {
                        $_SESSION['usuarios2_id'] = $conn->lastInsertId(); // Guardar el ID del nuevo usuario
                        // Redirigir a la página de administrador o usuario después de la creación
                        if ($email === 'administrador@gmail.com') {
                            header("Location: inicio.php"); // Redirigir a la página de administrador
                        } else {
                            header("Location: inicio3.php"); // Redirigir a la página de usuario regular
                        }
                        exit;
                    } else {
                        $message = 'Lo sentimos, hubo un problema al crear tu cuenta';
                    }
                }
            }
        } catch (PDOException $e) {
            $message = 'Error: ' . htmlspecialchars($e->getMessage());
        }
    } else {
        $message = 'Por favor, completa todos los campos.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles2.css"> <!-- Enlace al archivo CSS externo -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center; /* Centrar contenido */
        }

        .logo {
            height: 150px;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
        }

        .input-group {
            margin-bottom: 10px;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px 35px 8px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .input-group i {
            position: absolute;
            top: 30px;
            right: 10px;
            color: #888;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            display: block;
            margin-top: 15px;
            text-align: center;
            text-decoration: none;
            color: #4CAF50;
            font-size: 16px;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        a:hover {
            color: #45a049;
        }

        p {
            color: #e74c3c;
            margin-top: 10px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
            width: 300px;
        }

        .menu a {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: background-color 0.3s ease;
        }

        .menu a:hover {
            background-color: #f9f9f9;
        }

        .menu i {
            font-size: 18px;
        }
    </style>
</head>
<body>

<?php if (!empty($message)): ?>
    <p><?= htmlspecialchars($message) ?></p>
<?php endif; ?>

<div class="login-container">
    <!-- Logo de la Sociedad de Mejoras Públicas de Marinilla -->
    <img src="spmm.png" alt="Logo Sociedad de Mejoras Públicas de Marinilla" class="logo">
    
    <h1><i class="fas fa-sign-in-alt"></i> Ingresar</h1>
    <span><a href="signup.php"><i class="fas fa-user-plus"></i> Crear una cuenta</a></span>

    <form action="login.php" method="POST" class="login-form">
        <div class="input-group">
            <label for="email">Correo Electrónico:</label>
            <input id="email" name="email" type="text" placeholder="Ingresa tu email" required>
            <i class="fas fa-envelope"></i>
        </div>
        <div class="input-group">
            <label for="password">Contraseña:</label>
            <input id="password" name="password" type="password" placeholder="Ingresa tu contraseña" required>
            <i class="fas fa-lock"></i>
        </div>
        <button type="submit"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</button>
        <a href="index.php"><i class="fas fa-home"></i> Inicio</a>
    </form>
</div>

</body>
</html>