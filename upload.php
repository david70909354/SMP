<?php 
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $targetDir = "uploads/";

    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $targetFile = $targetDir . basename($file["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if ($file["error"] === UPLOAD_ERR_OK) {
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            $stmt = $conn->prepare("INSERT INTO archivos6 (nombre, ruta) VALUES (?, ?)");
            $stmt->bindParam(1, $file["name"]);
            $stmt->bindParam(2, $targetFile);

            if ($stmt->execute()) {
                echo "El archivo ha sido subido exitosamente.";
            } else {
                echo "Error al guardar información del archivo.";
            }
        } else {
            echo "Error al mover el archivo al directorio de destino.";
        }
    } else {
        echo "Error al subir el archivo: " . $file["error"];
    }
} else {
    echo "Método no permitido.";
}

$conn = null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir Archivo</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="upload-container">
        <p><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></p>
        <a href="inicio.php"><i class="fas fa-home icon"></i> Inicio</a>
    </div>
</body>
</html>


