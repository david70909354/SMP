<?php
require 'database.php';

$sql = "SELECT * FROM archivos ORDER BY fecha DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$files = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($files) {
    echo '<ul>';
    foreach ($files as $file) {
        echo '<li>';
        echo '<a href="' . htmlspecialchars($file['ruta']) . '">' . htmlspecialchars($file['nombre']) . '</a>';
        echo ' <a href="delete.php?id=' . $file['id'] . '" onclick="return confirm(\'¿Estás seguro de eliminar este archivo?\');">Eliminar</a>';
        echo '</li>';
    }
    echo '</ul>';
} else {
    echo 'No hay archivos disponibles.';
}
?>