<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirige si no hay sesión
    exit();
}
$nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <center>
        <h1 style="color:gold; font-family:arial ;">Bienvenido a ¡Guanentino, responda!</h1>
        <link rel="stylesheet" href="style.css">
        <h2>Hola, <?php echo htmlspecialchars($nombre); ?>!</h2>
   
    <br><br>
    <a href="./registrar_usuarios.php">
        <button type="submit">Registrar un nuevo usuario</button>
    </a>


    <br><br>
    <a href="./crear_pregunta.php">
        <button type = "submit">Registrar una nueva pregunta</button>
    </a>

    <br><br>
    <a href="modelo/consultas.php">
        <button type = "submit">Consultas</button>
        </a>


    <br><br>
    <a href="modelo/cerrar_sesion.php">
    <button type="button">Cerrar sesión</button>
    </a>
    </center>
    
</body>
</html>