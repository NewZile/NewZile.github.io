<?php
require '../db/require_user.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="website icon" type="png" href="../img/fondo/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Panel de Administración</title>
</head>

<body>
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
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="ticket.php">Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../agentes/new_agent/new_agent.html">Nuevo Agente</a>
                    </li>
                    <li class="nav-item me-auto"> <!-- Agregamos la clase "me-auto" -->
                        <a class="nav-link active" href="../usuario/usuario.php">
                        <?php echo $row['name']; ?>
                        </a>
                    </li>
                    <li class="nav-item dropdown">

                    </li>
                </ul>

                <hr class="d-md-none text-white-50">
                <!--boton Informacion -->
                <form class="d-flex">
                    <a class="btn btn-outline-warning d-none d-md-inline-block" href="logout.php">
                        Cerrar Sesion
                    </a>
                </form>
            </div>

        </div>
    </nav>


    <!-- Encabezado -->
    <h1 class="text-center" style="color:white;">Panel de Administración de Usuarios</h1>

    <!-- Contenedor principal -->
    <div class="container mt-5">
        <!-- Tabla de usuarios -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Permisos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "php_login_base");
                $query = "SELECT * FROM users";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo strtoupper($row['name']); ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        <td>
                            <?php echo $row['permisos']; ?>
                        </td>
                        <td>
                            <form>
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <button type="submit" formaction="edit/edit.php" class="btn btn-primary">Editar</button>
                                <button type="submit" formaction="delete/delete.php" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
                <?php mysqli_close($conn); ?>
            </tbody>
        </table>
    </div>


</body>

</html>