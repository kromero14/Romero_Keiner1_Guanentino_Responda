<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include("modelo/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Opciones de Respuesta</title>
</head>
<body>
    <h1>Listado de Opciones de Respuesta</h1>
    <link rel="stylesheet" href="style.css">
    <?php
    if (isset($_SESSION['username'])) {
        echo "Usuario logueado: " . $_SESSION['username'] . "<br><br>";

        $query = "SELECT * FROM opcion_respuesta";
        $resultado = mysqli_query($conexion, $query) or die("Error en la consulta: " . mysqli_error($conexion));

        if (mysqli_num_rows($resultado) > 0) {
            echo "<table border='1' align='center' cellpadding='5'>";
            echo "<tr>";
                echo "<th>ID Opción</th>";
                echo "<th>Texto</th>";
                echo "<th>Justificación</th>";
                echo "<th>¿Es Correcta?</th>";
                echo "<th>ID Pregunta</th>";
            echo "</tr>";

            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                    echo "<td>" . $fila['id_opc_respuesta'] . "</td>";
                    echo "<td>" . $fila['texto'] . "</td>";
                    echo "<td>" . $fila['justificacion'] . "</td>";
                    echo "<td>" . ($fila['es_correcta'] ? '✅ Sí' : '❌ No') . "</td>";
                    echo "<td>" . $fila['id_pregunta'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "⚠ No hay registros en la tabla <b>opcion_respuesta</b>.";
        }
    } else {
        echo "<p>⚠ No hay sesión activa. Por favor inicie sesión.</p>";
    }
    ?>
    <a href="home_admin.php">
        <button type = "submit">Volver al inicio</button>
        </a>
</body>
</html>
