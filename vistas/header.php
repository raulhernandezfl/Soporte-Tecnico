<?php

    session_start();

?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Boostrap-->
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/bootstrap/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="../public/bootstrap/responsive.bootstrap.min.css">

    <!-- CSS Data table-->
    <link rel="stylesheet" href="../public/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../public/datatable/buttons.dataTables.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../public/css/plantilla.css">

    <!-- CSS Font Awesome-->
    <link rel="stylesheet" href="../public/fontawesome/css/all.css">

    <title>Soporte técnico</title>

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
        <div class="container">
            <a class="navbar-brand" href="inicio.php"><img src="../public/img/hAyuntamiento.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="inicio.php">
                            <span class="fas fa-home"></span> Inicio
                        </a>
                    </li>
                <?php if($_SESSION['usuario']['rol'] == 1) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="misDispositivos.php">
                            <span class="fas fa-microchip"></span> Mis dispositivos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="misReportes.php">
                            <span class="fas fa-file-signature"></span> Reportes | Soporte
                        </a>
                    </li>
                <?php }elseif ($_SESSION['usuario']['rol'] == 2) { ?>
                    <!-- De aquí son las vistas del administrador -->
                    <li class="nav-item">
                        <a class="nav-link" href="usuarios.php">
                            <span class="fas fa-users"></span> Usuarios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="asignacion.php">
                            <span class="fas fa-people-arrows"></span> Asignación
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reportes.php">
                            <span class="fas fa-clipboard"></span> Reportes
                        </a>
                    </li>
                <?php } ?>
                    <li class="nav-item dropdown">
                        <a style="color: blue;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <b><span class="fas fa-user"></span> <?php echo $_SESSION['usuario']['nombre']; ?></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalActualizarDatosPersonales" onclick="obtenerDatosPersonalesInicio(<?php echo $_SESSION['usuario']['id']; ?>)">
                                <span class="fas fa-users-cog"></span> Editar datos
                            </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../procesos/usuarios/login/salir.php">
                                <span class="fas fa-sign-out-alt"></span> Salir
                            </a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <?php include "inicio/modalActualizarDatosPersonales.php"; ?>