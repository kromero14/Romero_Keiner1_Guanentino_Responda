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
    <title>Consulta de Preguntas</title>
</head>
<body>
    <h1>Listado de Preguntas</h1>
    <link rel="stylesheet" href="style.css">
    <?php
    if (isset($_SESSION['username'])) {
        echo "Usuario logueado: " . $_SESSION['username'] . "<br><br>";

        $query = "SELECT * FROM pregunta";
        $resultado = mysqli_query($conexion, $query) or die("Error en la consulta: " . mysqli_error($conexion));

        if (mysqli_num_rows($resultado) > 0) {
            echo "<table border='1' align='center' cellpadding='5'>";
            echo "<tr>";
                echo "<th>ID Pregunta</th>";
                echo "<th>Competencia</th>";
                echo "<th>Evidencia</th>";
                echo "<th>Afirmación</th>";
                echo "<th>Contexto</th>";
                echo "<th>Evaluación</th>";
                echo "<th>Estándar</th>";
                echo "<th>Nivel</th>";
                echo "<th>ID Grado</th>";
                echo "<th>ID Asignatura</th>";
                echo "<th>ID Digitador</th>";
            echo "</tr>";

            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                    echo "<td>" . $fila['id_pregunta'] . "</td>";
                    echo "<td>" . $fila['competencia'] . "</td>";
                    echo "<td>" . $fila['evidencia'] . "</td>";
                    echo "<td>" . $fila['afirmacion'] . "</td>";
                    echo "<td>" . $fila['contexto'] . "</td>";
                    echo "<td>" . $fila['evaluacion'] . "</td>";
                    echo "<td>" . $fila['estandar'] . "</td>";
                    echo "<td>" . $fila['nivel'] . "</td>";
                    echo "<td>" . $fila['id_grado'] . "</td>";
                    echo "<td>" . $fila['id_asignatura'] . "</td>";
                    echo "<td>" . $fila['id_digitador'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "⚠ No hay registros en la tabla <b>preguntas</b>.";
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
