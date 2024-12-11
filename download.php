<?php
if (isset($_GET['file'])) {
    $file = urldecode($_GET['file']);
    $filepath = $file;

    // Verificar si el archivo existe
    if (file_exists($filepath)) {
        // Forzar la descarga del archivo
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        readfile($filepath);
        exit;
    } else {
        echo "El archivo no existe.";
    }
} else {
    echo "Archivo no especificado.";
}
?>

