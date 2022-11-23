<!-- Modal -->
<form id="frmNuevoReporte" method="POST" onsubmit="return agregarNuevoReporte()">
    <div class="modal fade" id="modalCrearReporte" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear reporte</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="idEquipo">Mis dispositivos</label>

                    <?php

                        $idUsuario = $_SESSION['usuario']['id'];
                        $sql ="SELECT 
                                    asignacion.id_asignacion AS idAsignacion,
                                    equipo.id_equipo AS idEquipo,
                                    equipo.nombre AS nombreEquipo
                                FROM
                                    t_asignacion AS asignacion
                                        INNER JOIN
                                    t_cat_equipo AS equipo ON asignacion.id_equipo = equipo.id_equipo
                                WHERE
                                    asignacion.id_persona = (SELECT 
                                            id_persona
                                        FROM
                                            t_usuarios
                                        WHERE
                                            id_usuario = '$idUsuario')";
                        $respuesta = mysqli_query($conexion, $sql);
                    
                    ?>

                    <select name="idEquipo" id="idEquipo" class="form-control" required>
                        <option value="">Selecciona un dispositivos</option>
                        <?php while ($mostrar = mysqli_fetch_array($respuesta)) { ?>
                            <option value=" <?php echo $mostrar['idEquipo'] ?> "> <?php echo $mostrar['nombreEquipo'] ?> </option>
                        <?php } ?>
                    </select>

                    <label for="problema">Describe tu problema</label>
                    <textarea name="problema" id="problema" class="form-control" required></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cerrar
                    </button>
                    <button class="btn btn-primary">Crear</button>
                </div>
            </div>
        </div>
    </div>
</form>