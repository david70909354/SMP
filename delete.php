<?php
require 'database.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Get file details from database
    $stmt = $conn->prepare("SELECT ruta, nombre FROM archivos WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $file = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($file) {
        // Delete file from filesystem
        if (unlink($file['ruta'])) {
            // Delete record from database
            $stmt = $conn->prepare("DELETE FROM archivos WHERE id = :id");
            $stmt->bindParam(':id', $id);

            if ($stmt->execute()) {
                echo "Archivo eliminado exitosamente.";
            } else {
                echo "Error al eliminar el registro del archivo.";
            }
        } else {
            echo "Error al eliminar el archivo del servidor.";
        }
    } else {
        echo "Archivo no encontrado.";
    }
} else {
    echo "ID del archivo no especificado.";
}
?>