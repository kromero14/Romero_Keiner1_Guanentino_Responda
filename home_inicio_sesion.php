<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Guanentino, responda!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" type="image/jpg" href="img/favico.jpg">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet"/>

    <!-- Bootstrap Custom Stylesheet -->
    <link href="style23.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background: url("img/Colegio.jpg") no-repeat center center fixed;
            background-size: cover;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.6); /* oscurece la imagen para resaltar el texto */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .login-section {
            text-align: center;
            padding: 100px 20px;
            color: white;
        }
        .login-section h2 {
            margin-bottom: 30px;
            font-size: 2rem;
        }
        .login-section a button {
            background: #007bff;
            color: white;
            border: none;
            padding: 12px 25px;
            margin: 10px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        .login-section a button:hover {
            background: #0056b3;
        }
        footer {
            background: rgba(0, 0, 0, 0.85);
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
            <a href="index.html" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">¡Guanentino!</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="generalidades.php" class="nav-item nav-link">Colegio Guanentá</a>
                    <a href="informacion_saber.php" class="nav-item nav-link">Información Saber 11</a>
                    <a href="home_inicio_sesion.php" class="nav-item nav-link active">Iniciar Sesión</a>
                    <a href="index.php" class="nav-item nav-link">Inicio</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Sección de Login -->
     <br>
     <br>
     <br>    <section class="login-section">
        <h2>Inicio de sesión</h2>
        <a href="modelo/login_admin.php">
            <button type="button">Admin</button>
        </a>
        <a href="modelo/login_docente.php">
            <button type="button">Docente</button>
        </a>
        <a href="modelo/login_digitador.php">
            <button type="button">Digitador</button>
        </a>
        <a href="index.php">
            <button type="button">Volver al inicio</button>
        </a>
    </section>

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
