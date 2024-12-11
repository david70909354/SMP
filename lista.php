<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Archivos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header class="navbar">
        <h1><i class="fas fa-folder"></i> Gestor de Archivos</h1>
        <nav>
            <a href="inicio.php"><i class="fas fa-home"></i> Inicio</a>
            <a href="agregar.php"><i class="fas fa-plus"></i> Agregar Archivo</a>
        </nav>
    </header>

    <main class="container">
        <h2><i class="fas fa-file-alt"></i> Lista de Archivos</h2>
        <!-- Tabla para mostrar archivos -->
        <table class="file-table">
            <thead>
                <tr>
                    <th><i class="fas fa-file"></i> Nombre</th>
                    <th><i class="fas fa-download"></i> Descargar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'database.php';
                $stmt = $conn->prepare("SELECT * FROM archivos6");
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (count($results) > 0) {
                    foreach ($results as $row) {
                        echo "<tr>";
                        echo "<td><i class='fas fa-file'></i> " . htmlspecialchars($row['nombre']) . "</td>";
                        echo "<td><a class='download-button' href='download.php?file=" . urlencode($row['ruta']) . "'><i class='fas fa-download'></i> Descargar</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2' class='no-files'><i class='fas fa-exclamation-circle'></i> No hay archivos disponibles.</td></tr>";
                }

                $conn = null;
                ?>
            </tbody>
        </table>
    </main>
    <a href="inicio.php">Inicio</a>
    <footer>
       
    </footer>
</body>
</html>
