<!-- Modal -->
<form id="frmActualizarDatosPersonales" method="POST" onsubmit="return actualizarDatosPersonales()">
    <div class="modal fade" id="modalActualizarDatosPersonales" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar datos personales</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="paternoInicio">Apellido paterno</label>
                    <input type="text" class="form-control" id="paternoInicio" name="paternoInicio">

                    <label for="maternoInicio">Apellido materno</label>
                    <input type="text" class="form-control" id="maternoInicio" name="maternoInicio">

                    <label for="nombreInicio">Nombre</label>
                    <input type="text" class="form-control" id="nombreInicio" name="nombreInicio">

                    <label for="telefonoInicio">Teléfono</label>
                    <input type="text" class="form-control" id="telefonoInicio" name="telefonoInicio">

                    <label for="correoInicio">Correo</label>
                    <input type="mail" class="form-control" id="correoInicio" name="correoInicio">

                    <label for="fechaNacInicio">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fechaNacInicio" name="fechaNacInicio">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button class="btn btn-warning">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</form>