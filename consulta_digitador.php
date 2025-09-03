<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include("modelo/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Digitador</title>
</head>
<body>
    <h1>Consulta de digitador</h1>
    <link rel="stylesheet" href="style.css">
    <?php
    echo 'Usuario: ' . (isset($_SESSION['username']) ? $_SESSION['username'] : 'Invitado');

    // Mostrar consulta solo si hay sesión activa
    if (isset($_SESSION['username'])) {
        $query = "SELECT * FROM digitador";
        $resultado = mysqli_query($conexion, $query) or die("Error en la consulta: " . mysqli_error($conexion));

        // Encabezado de la tabla
        echo "<table border='1' align='center'>";
        echo "<tr>";
            echo "<th>ID Digitador</th>";
            echo "<th>Email</th>";
            echo "<th>Contraseña</th>";
            echo "<th>Nombre</th>";
        echo "</tr>";

        // Filas con los datos de los docentes
        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>";
                echo "<td>" . $fila['id_digitador'] . "</td>";
                echo "<td>" . $fila['email'] . "</td>";
                echo "<td>" . $fila['contraseña'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No hay sesión activa.</p>";
    }
    ?>
            <a href="home_admin.php">
        <button type = "submit">Volver al inicio</button>
        </a>
</body>
</html>
