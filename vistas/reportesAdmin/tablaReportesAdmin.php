<?php

session_start();

include "../../clases/Conexion.php";
$con = new Conexion();
$conexion = $con->conectar();
$idUsuario = $_SESSION['usuario']['id'];
$contador = 1;
$sql = "SELECT 
                reporte.id_reporte AS idReporte,
                reporte.id_usuario AS idUsuario,
                CONCAT(persona.paterno,
                        ' ',
                        persona.materno,
                        ' ',
                        persona.nombre) AS nombrePersona,
                equipo.id_equipo AS idEquipo,
                equipo.nombre AS nombreEquipo,
                reporte.descripcion_problema AS problema,
                reporte.estatus AS estatus,
                reporte.solucion_problema AS solucion,
                reporte.fecha AS fecha
            FROM
                t_reportes AS reporte
                    INNER JOIN
                t_usuarios AS usuario ON reporte.id_usuario = usuario.id_usuario
                    INNER JOIN
                t_persona AS persona ON usuario.id_persona = persona.id_persona
                    INNER JOIN
                t_cat_equipo AS equipo ON reporte.id_equipo = equipo.id_equipo
                ORDER BY reporte.fecha DESC";
$respuesta = mysqli_query($conexion, $sql);

?>


<table class="table table-sm dt-responsive nowrap" style="width:100%" id="tablaReportesAdminDataTable">
    <thead>
        <th>#</th>
        <th>Persona</th>
        <th>Dispositivo</th>
        <th>Fecha</th>
        <th>Descripción</th>
        <th>Estatus</th>
        <th>Solución</th>
        <th>Eliminar</th>
    </thead>

    <tbody>

        <?php while ($mostrar = mysqli_fetch_array($respuesta)) { ?>

            <tr>
                <td> <?php echo $contador++; ?> </td>
                <td> <?php echo $mostrar['nombrePersona'] ?> </td>
                <td> <?php echo $mostrar['nombreEquipo'] ?> </td>
                <td> <?php echo $mostrar['fecha'] ?> </td>
                <td> <?php echo $mostrar['problema'] ?> </td>
                <td>
                    <?php

                    $estatus = $mostrar['estatus'];
                    $cadenaEstatus = '<span class="badge bg-danger">Abierto</span>';
                    if ($estatus == 0) {
                        $cadenaEstatus = '<span class="badge bg-success">Cerrado</span>';
                    }
                    echo $cadenaEstatus;

                    ?>
                </td>
                <td>
                    <button class="btn btn-info btn-m" onclick="obtenerDatosSolucion('<?php echo $mostrar['idReporte']; ?>')" data-bs-toggle="modal" data-bs-target="#modalAgregarSolucionReporte">
                        <span class="fas fa-hand-spock"></span>
                    </button>
                    <?php echo $mostrar['solucion']; ?>
                </td>
                <td>
                    <?php if ($mostrar['solucion'] == "") { ?>
                        <button class="btn btn-danger btn_sm" onclick="eliminarReporteAdmin(<?php echo $mostrar['idReporte'] ?>)"> 
                            <span class="fas fa-trash-alt"></span> 
                        </button>
                    <?php } ?>
                </td>
            </tr>

        <?php } ?>

    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#tablaReportesAdminDataTable').DataTable({
            language: {
                url: "../public/datatable/es-ES.json"
            },
            dom: 'Bfrtip',
            
            buttons: {
                buttons: [
                    {
                        extend: 'copyHtml5', className: 'btn btn-outline-dark', text: '<i class="far fa-copy"></i> Copiar'
                    },

                    {
                        extend: 'excelHtml5', className: 'btn btn-outline-success', text: '<i class="far fa-file-excel"></i> Excel'
                    },

                    {
                        extend: 'csvHtml5', className: 'btn btn-outline-primary', text: '<i class="fas fa-file-csv"></i> CSV'
                    },

                    {
                        extend: 'pdfHtml5', className: 'btn btn-outline-danger', text: '<i class="far fa-file-pdf"></i> PDF'
                    }
                ],
                dom: {
                    button: {
                        className: 'btn'
                    }
                }
            }
        });
    });
</script>