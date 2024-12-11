<?php 
require 'database.php';

// Función para manejar la búsqueda de archivos
function buscarArchivos($conn, $criterio) {
    $stmt = $conn->prepare("SELECT * FROM archivos6 WHERE nombre LIKE ?");
    $search = "%" . $criterio . "%";
    $stmt->bindParam(1, $search);
    $stmt->execute();

    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<div class="resultados">';
    if ($resultados) {
        foreach ($resultados as $archivo) {
            echo "<div class='archivo'>";
            echo "<p><strong>Nombre:</strong> " . htmlspecialchars($archivo['nombre']) . "</p>";
            echo "<p><strong>Ruta:</strong> " . htmlspecialchars($archivo['ruta']) . "</p>";
            echo "<a class='boton-descargar' href='descargar.php?ruta=" . urlencode($archivo['ruta']) . "'>Descargar</a>";
            echo "</div>";
        }
    } else {
        echo "<p class='sin-resultados'><i class='fas fa-exclamation-circle icon'></i> No se encontraron archivos con el criterio de búsqueda.</p>";
    }
    echo '</div>';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['buscar'])) {
    $criterio = $_POST['criterio'];
    buscarArchivos($conn, $criterio);
}

// Cerrar la conexión
$conn = null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor de Archivos</title>
    <!-- Enlace a style3.css -->
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="styles2.css"> <!-- Enlace al archivo CSS externo -->
</head>
<body>
    <!-- Formulario HTML para la búsqueda de archivos -->
    <form method="POST">
        <label for="criterio">Buscar archivos:</label>
        <input type="text" name="criterio" id="criterio" required>
        <button type="submit" name="buscar"><i class="fas fa-search"></i> Buscar</button>
    </form>
    <a href="inicio.php"><i class="fas fa-home icon"></i> Inicio</a>
</body>
</html>
