<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor de Archivos</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Agregar un enlace a Font Awesome para los íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        h1, h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 300px;
        }

        input[type="file"],
        input[type="text"] {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
            gap: 5px;
        }

        button:hover {
            background-color: #45a049;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            text-align: left;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .download-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: background-color 0.3s ease;
        }

        .download-button:hover {
            background-color: #45a049;
        }

        .download-button i {
            font-size: 16px;
        }

        a {
            margin-top: 20px;
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

        .icon {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    
    <h2><i class="fas fa-file-alt icon"></i> Lista de Archivos</h2>
    <table>
        <tr>
            <th><i class="fas fa-file icon"></i> Nombre</th>
            <th><i class="fas fa-folder icon"></i> Ruta</th>
            <th><i class="fas fa-download icon"></i> Descargar</th>
        </tr>
        <?php
        require 'database.php';
        $stmt = $conn->prepare("SELECT * FROM archivos6");
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($results) > 0) {
            foreach ($results as $row) {
                echo "<tr>";
                echo "<td><i class='fas fa-file icon'></i>" . htmlspecialchars($row['nombre']) . "</td>";
                echo "<td><i class='fas fa-folder icon'></i>" . htmlspecialchars($row['ruta']) . "</td>";
                echo "<td><a class='download-button' href='download.php?file=" . urlencode($row['ruta']) . "'><i class='fas fa-download'></i> Descargar</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'><i class='fas fa-exclamation-circle icon'></i> No hay archivos disponibles.</td></tr>";
        }

        // Cerrar la conexión
        $conn = null;
        ?>
    </table>
    <a href="inicio3.php"><i class="fas fa-home icon"></i> Inicio</a>

</body>
</html>
