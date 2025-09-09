<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirige si no hay sesión
    exit();
}
$nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - ¡Guanentino, responda!</title>
    <link rel="icon" type="image/jpg" href="img/favico.jpg">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" /> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <!-- Bootstrap Custom Stylesheet -->
    <link href="style23.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background: url("img/Colegio.jpg") no-repeat center center fixed;
            background-size: cover;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.85);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .content {
            max-width: 800px;
            margin: auto;
            padding: 60px 20px;
            text-align: center;
            color: white;
        }
        .content h1 {
            color: gold;
            margin-bottom: 20px;
        }
        .content h2 {
            margin-bottom: 40px;
        }
        .btn-custom {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 12px 25px;
            margin: 10px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: #0056b3;
        }
        footer {
            background: rgba(0, 0, 0, 0.9);
        }
        
        h2 {
            color: red ;
        }
    </style>
</head>
<body>
<div class="overlay">
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
            <a href="index.php" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">¡Guanentino!</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="generalidades.php" class="nav-item nav-link">Colegio Guanentá</a>
                    <a href="informacion_saber.php" class="nav-item nav-link">Información Saber 11</a>
                    <a href="home_inicio_sesion.php" class="nav-item nav-link">Iniciar Sesión</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Contenido Admin -->
    <div class="content">
        <h1>Bienvenido a ¡Guanentino, responda!</h1>
        <h2>Hola, <?php echo htmlspecialchars($nombre); ?>!</h2>

        <a href="./registrar_usuarios.php" class="btn-custom">Registrar un nuevo usuario</a>
        <a href="./crear_pregunta.php" class="btn-custom">Registrar una nueva pregunta</a>
        <a href="modelo/consultas.php" class="btn-custom">Consultas</a>
        <a href="home_inicio_sesion.php".php" class="btn-custom" style="background: #dc3545;">Cerrar sesión</a>
    </div>

    <!-- Footer Start -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2025 Proyecto ¡Guanentino, Responda! - Colegio San José de Guanentá.</p>
        <p>Desarrollador: Keiner Santiago Romero Delgado - Especialidad en Sistemas</p>
    </footer>
    <!-- Footer End -->
</div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
