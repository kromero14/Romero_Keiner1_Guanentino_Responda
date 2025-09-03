<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
</head>
<body>
    <h1>Consultas</h1>
    <link rel="stylesheet" href="style2.css">
    
    <?php
        echo 'Usuario: '.$nombre_usuario;
    ?>
    <h2>Consultas</h2>
    <a href="../consulta_docentes.php">
        <button type = "submit">Docentes</button>
        <br>
        <a href="../consulta_digitador.php">
        <button type = "submit">Digitador</button>
        <br>
        <a href="../consulta_admin.php">
        <button type = "submit">Administrador</button>
        <br>
        <a href="../consulta_pregunta.php">
        <button type = "submit">Pregunta</button>
        <br>
        <a href="../consulta_opcion_respuesta.php">
        <button type = "submit">Opciones de Respuesta</button>
    <br>
    <hr>
    <h2>Salir</h2>
    <a href="../index.php">
        <button type = "submit">Volver al inicio</button>
        </a>
    
</body>
</html>