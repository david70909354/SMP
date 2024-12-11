<?php 
// Configuración de la conexión a la base de datos
$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'usuarios';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configura el manejo de errores
} catch (PDOException $e) {
    die('Conexión fallida: ' . $e->getMessage());
}

$message = ''; // Mensaje para mostrar al usuario

// Manejo del registro de usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Validar el formato del correo electrónico
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = 'Correo electrónico no válido.';
        } elseif ($password !== $confirm_password) {
            $message = 'Las contraseñas no coinciden.';
        } else {
            // Verificar si el usuario ya existe
            $existingUser = $conn->prepare('SELECT id FROM usuarios6 WHERE email = :email');
            $existingUser->bindParam(':email', $email);
            $existingUser->execute();
            
            if ($existingUser->rowCount() > 0) {
                $message = 'El correo electrónico ya está registrado.';
            } else {
                // Crear un nuevo usuario
                $sql = "INSERT INTO usuarios6 (email, password) VALUES (:email, :password)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':email', $email);
                $passwordHash = password_hash($password, PASSWORD_BCRYPT);
                $stmt->bindParam(':password', $passwordHash);

                if ($stmt->execute()) {
                    $message = 'Registro exitoso. Puedes iniciar sesión.';
                } else {
                    $errorInfo = $stmt->errorInfo();
                    $message = 'Lo sentimos, hubo un problema al crear tu cuenta. Error: ' . htmlspecialchars($errorInfo[2]);
                }
            }
        }
    } else {
        $message = 'Por favor, completa todos los campos.';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

        h1 {
            color: #333;
        }

        .signup-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 300px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .input-group label {
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            margin-bottom: 10px;
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
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            margin-top: 20px;
            text-decoration: none;
            color: #4CAF50;
            font-size: 16px;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        a:hover {
            color: #45a049;
        }

        p {
            color: #e74c3c;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<?php if(!empty($message)): ?>
    <p><?= htmlspecialchars($message) ?></p>
<?php endif; ?>

<div class="signup-container">
    <h1>Registro</h1>
    <span><a href="login.php"><i class="fas fa-sign-in-alt"></i> Ingresar</a></span>
    <form action="signup.php" method="POST" class="signup-form">
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
        <div class="input-group">
            <label for="confirm_password">Confirmar Contraseña:</label>
            <input id="confirm_password" name="confirm_password" type="password" placeholder="Confirma tu contraseña" required>
            <i class="fas fa-lock"></i>
        </div>
        <button type="submit"><i class="fas fa-user-plus"></i> Registrar</button>
    </form>
    <a href="index.php"><i class="fas fa-home"></i> Inicio</a>
</div>

</body>
</html>



