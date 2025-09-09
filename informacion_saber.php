<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Saber 11</title>
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
            background: url("img/joven.jpg") no-repeat center center fixed;
            background-size: cover;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.8);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .content {
            max-width: 900px;
            margin: auto;
            padding: 60px 30px;
            color: white;
            text-align: center;
        }
        .content h1, .content h2, .content h3 {
            margin-top: 20px;
            font-weight: bold;
        }
        .content p, .content li {
            font-size: 1.1rem;
            line-height: 1.6;
        }
        .content ul {
            list-style: none;
            padding: 0;
        }
        .content ul li::before {
            content: "✔ ";
            color: #00d9ff;
        }
        .content button {
            background: #007bff;
            color: white;
            border: none;
            padding: 12px 25px;
            margin-top: 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        .content button:hover {
            background: #0056b3;
        }
        footer {
            background: rgba(0, 0, 0, 0.9);
        }
        h3 {
            color:red ;
        }
        h1 {
            color:orange ;
        }
    </style>
</head>
<body>
<div class="overlay">
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg navbar-dark py-3" style="background: rgba(0,0,0,0.5);">
            <a href="index.php" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">¡Guanentino!</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="generalidades.php" class="nav-item nav-link">Colegio Guanentá</a>
                    <a href="informacion_saber.php" class="nav-item nav-link active">Información Saber 11</a>
                    <a href="home_inicio_sesion.php" class="nav-item nav-link">Iniciar Sesión</a>
                    <a href="index.php" class="nav-item nav-link">Inicio</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Contenido Saber 11 -->
     <br>
     <br>
     <br>
    <div class="content">
        <h1>Información de las Pruebas Saber 11</h1>
        <img src="img/prueba.png" alt="Examen Saber 11" height="550" width="530" style="border-radius:10px; margin-top:20px;" />

        <h2>Información sobre el Examen Saber 11</h2>
        <hr style="border: 1px solid white; width: 60%;" />

        <h3>🎯 Objetivos</h3>
        <ul>
            <li>Comprobar el desarrollo de competencias de los estudiantes de grado 11.</li>
            <li>Brindar elementos para la autoevaluación y el proyecto de vida.</li>
            <li>Dar información a las instituciones para programas de nivelación.</li>
            <li>Monitorear la calidad de la educación en el país.</li>
            <li>Servir de insumo para políticas educativas.</li>
        </ul>

        <h3>👥 ¿A quiénes evalúa?</h3>
        <p>- Estudiantes de grado 11.<br>
           - Mayores de 18 años que deseen obtener el título de bachiller.</p>

        <h3>🧩 Estructura del examen</h3>
        <ul>
            <li>Pruebas: Matemáticas, Lectura Crítica, Sociales y Ciudadanas, Ciencias Naturales e Inglés.</li>
            <li>Cuestionario socioeconómico adicional.</li>
            <li>Duración: 2 sesiones de 4 horas y 30 minutos cada una.</li>
            <li>Modalidades: cuadernillo estándar y versiones especiales para comunidades indígenas o personas con discapacidad.</li>
        </ul>

        <h3>❓ Tipos de preguntas</h3>
        <p>Todas son de selección múltiple con única respuesta.</p>

        <h3>📑 Materiales del examen</h3>
        <ul>
            <li>Cuadernillo de preguntas.</li>
            <li>Hoja de respuestas.</li>
            <li>Hoja de operaciones.</li>
        </ul>

        <a href="index.php"><button type="submit">Inicio</button></a>
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
