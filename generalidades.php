<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Colegio San José de Guanentá</title>
    <link rel="icon" type="image/jpg" href="img/favico.jpg">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
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
            background: rgba(0, 0, 0, 0.75);
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
        .content h1, .content h2 {
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
        h2 {
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
            <a href="index.html" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">¡Guanentino!</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="generalidades.php" class="nav-item nav-link active">Colegio Guanentá</a>
                    <a href="informacion_saber.php" class="nav-item nav-link">Información Saber 11</a>
                    <a href="home_inicio_sesion.php" class="nav-item nav-link">Iniciar Sesión</a>
                    <a href="index.php" class="nav-item nav-link">Inicio</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Contenido Generalidades -->
     <br>
     <br>
    <div class="content">
        <h1>Colegio San José de Guanentá</h1>
        <img src="img/Escudo.jpg" alt="Colegio San José de Guanentá" height="500" width="400" style="border-radius:10px; margin-top:20px;" />

        <h2>Generalidades del Colegio Guanentá</h2>
        <hr style="border: 1px solid white; width: 60%;" />

        <h2>Historia</h2>
        <p>El Colegio San José de Guanentá fue fundado con la misión de ofrecer una educación integral, humanista y de calidad. A lo largo de su historia ha formado a miles de guanentinos que hoy en día se destacan en diferentes ámbitos profesionales y sociales.</p>

        <h2>Misión</h2>
        <p>Formar estudiantes íntegros en lo académico y en valores, con capacidad crítica, solidaria y comprometida con el desarrollo de la región y del país.</p>

        <h2>Visión</h2>
        <p>Ser reconocido a nivel regional y nacional como una institución líder en innovación educativa, excelencia académica y compromiso social.</p>

        <h2>Infraestructura</h2>
        <p>El colegio cuenta con aulas modernas, laboratorios de ciencias y tecnología, biblioteca, canchas deportivas, auditorio y espacios culturales que favorecen el desarrollo integral de los estudiantes.</p>

        <h2>Logros</h2>
        <ul>
            <li>Destacados resultados en las Pruebas Saber 11.</li>
            <li>Reconocimientos en competencias deportivas y culturales.</li>
            <li>Premios en ferias de ciencia y proyectos de investigación escolar.</li>
            <li>Tradición de excelencia en su banda marcial, orgullo guanentino.</li>
        </ul>

        <h2>Actividades Destacadas</h2>
        <p>El colegio realiza anualmente desfiles cívicos, concursos académicos, ferias científicas, encuentros culturales y actividades deportivas, fortaleciendo así el espíritu de comunidad y pertenencia.</p>

        <h2>Contacto</h2>
        <p><b>Teléfono:</b> +57 607 723 5600</p>
        <p><b>Correo electrónico:</b> <a href="mailto:coordinacionacademica@colegioguanenta.edu.co" style="color:#00d9ff;">coordinacionacademica@colegioguanenta.edu.co</a></p>

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
