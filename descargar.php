<?php
if (isset($_GET['ruta'])) {
    $ruta = urldecode($_GET['ruta']);

    if (file_exists($ruta)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($ruta));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($ruta));
        readfile($ruta);
        exit;
    } else {
        echo "El archivo no existe.";
    }
} else {
    echo "No se ha especificado un archivo para descargar.";
}
