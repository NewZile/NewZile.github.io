<!DOCTYPE html>
<html lang="es">

<head name="viewport" y content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="website icon" type="png" href="../img/fondo/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Reyna</title>
    <link rel="stylesheet" href="estilos/style.css">
<script src="js/js.js"></script>
</head>

<body>

    <?php
    require './php/info_agents.php';
    require '../db/require_user.php';  
    ?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- icono o nombre -->
        <a class="navbar-brand" href="../pagina_administracion.php">
            <i class="bi bi-flower1"></i>
            <span class="text-warning">ValorantStats</span>
        </a>

        <!-- boton del menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- elementos del menu colapsable -->
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../agenda.php">Calendario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../Estadisticas/stats.html">Estadisticas</a>
                </li>
                <li class="nav-item dropdown">
                    <!-- Aquí puedes agregar los elementos de tu dropdown -->
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../usuario/usuario.php">
                        <?php echo $row['name']; ?>
                    </a>
                </li>
            </ul>

            <form class="d-flex">
                <a class="btn btn-outline-warning d-none d-md-inline-block" href="../logout.php">
                    Cerrar Sesion
                </a>
            </form>
        </div>
    </div>
</nav>


<div class="container">
        <div class="row">
            <div class="col-md-6 ml-auto">
                <img src="img/reyna/reyna.png" id="img-fluid" alt="Imagen" class="img-fluid animate__animated animate__fadeInLeft" style="animation-duration: 1s;">
            </div>
            <div class="col-md-6 d-flex align-items-center text-center mr-auto" style="color:white;">
                <div class="animate__animated animate__fadeInRight" style="animation-duration: 1s;">
                <h2><?php echo $titulo; ?></h2>
                    <p>// BIOGRAFÍA</p>
                    <p class="animate__animated animate__fadeInUp" style="animation-duration: 1s; animation-delay: 0.5s;">
                    <p><?php echo $parrafo; ?></p>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-lg-10 col-sm-wrap text-center">
                <button onclick="playVideo('videoreyna1')" class="animate__animated animate__bounceIn" style="animation-duration: 1s; animation-delay: 0.2s;">
                    <img class="mi-imagen" src="img/reyna/Q.png">
                </button>
                <button onclick="playVideo('videoreyna2')" class="animate__animated animate__bounceIn" style="animation-duration: 1s; animation-delay: 0.4s;">
                    <img class="mi-imagen" src="img/reyna/E.png" alt="">
                </button>
                <button onclick="playVideo('videoreyna3')" class="animate__animated animate__bounceIn" style="animation-duration: 1s; animation-delay: 0.6s;">
                    <img class="mi-imagen" src="img/reyna/C.png" alt="">
                </button>
                <button onclick="playVideo('videoreyna4')" class="animate__animated animate__bounceIn" style="animation-duration: 1s; animation-delay: 0.8s;">
                    <img class="mi-imagen" src="img/reyna/X.png" alt="">
                </button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center"> 
            <div class="col-12 col-sm-10 col-sm-wrap">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsiv w-100" id="videoPlayer"></video>
                </div>
            </div>
        </div>
    </div>

</body>
</html>