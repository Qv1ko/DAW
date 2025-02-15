<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Despliegue web en Render</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./views/raceView.html">Nueva carrera</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./controllers/resetPointsController.php">Reiniciar temorada</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container">
        <h2>Clasificación</h2>
        <?php
            require_once("./controllers/classificationController.php");
        ?>
    </main>

    <footer>
        <div class="container-fluid bg-dark text-white text-center py-2">
            <p>Derechos de autor &copy; 2025 - Despliegue web en Render</p>
        </div>
    </footer>
</body>

</html>