<?php
    include "header.php";
    if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 1) {
        include "../clases/Conexion.php";
        $con = new Conexion();
        $conexion = $con->conectar();
?>

    <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="fw-light">Reportes</h1>
                <p class="lead">
                    <button class="btn btn-primary btn-l" data-bs-toggle="modal" data-bs-target="#modalCrearReporte" >
                        <span class="fas fa-plus-circle"></span>
                    </button>
                    <hr>
                    <div id="tablaReporteClienteLoad"></div>
                </p>
            </div>
        </div>
    </div>

    <?php 
        include "reportesCliente/modalCrearReporte.php";
        include "footer.php";
    ?>

    <script src="../public/js/reportesCliente/reportesCliente.js"></script>

    <?php
        } else {
            header("location: ../index.html");
        }
    ?>