<!-- Modal -->
<form id="frmActualizarUsuario" method="POST" onsubmit="return actualizarUsuario()">
    <div class="modal fade" id="modalActualizarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="idUsuario" name="idUsuario" hidden>
                <div class="row" style="padding-bottom: 5px;">
                    <div class="col-sm-4">
                        <label for="paternoU" class="form-label">Apellido paterno</label>
                        <input type="text" class="form-control" id="paternoU" name="paternoU" placeholder="Paterno" required>
                    </div>

                    <div class="col-sm-4">
                        <label for="maternoU" class="form-label">Apellido materno</label>
                        <input type="text" class="form-control" id="maternoU" name="maternoU" placeholder="Materno" required>
                    </div>

                    <div class="col-sm-4">
                        <label for="nombreU" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombreU" name="nombreU" placeholder="Nombre" required>
                    </div>
                </div>

                <div class="row" style="padding-bottom: 5px;">
                    <div class="col-sm-4">
                        <label for="fechaNacimientoU" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fechaNacimientoU" name="fechaNacimientoU" placeholder="Fecha nacimiento">
                    </div>

                    <div class="col-sm-4">
                        <label for="sexoU" class="form-label">Sexo</label>
                        <select class="form-control" id="sexoU" name="sexoU">
                            <option value=""></option>
                            <option value="F">Femenino</option>
                            <option value="M">Masculino</option>
                        </select>
                    </div>

                    <div class="col-sm-4">
                        <label for="telefonoU" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefonoU" name="telefonoU" placeholder="Teléfono">
                    </div>
                </div>

                <div class="row" style="padding-bottom: 5px;">
                    <div class="col-sm-4">
                        <label for="correoU" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="correoU" name="correoU" placeholder="Correo">
                    </div>

                    <div class="col-sm-4">
                        <label for="usuarioU" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuarioU" name="usuarioU" placeholder="Usuario">
                    </div>
                </div>

                <div class="row" style="padding-bottom: 5px;">
                    <div class="col-sm-12">
                        <label for="idRolU" class="form-label">Rol de usuario</label>
                        <select class="form-control" id="idRolU" name="idRolU" required>
                            <option value="1">Cliente</option>
                            <option value="2">Administrador</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <label for="ubicacionU" class="form-label">Describir ubicación</label>
                        <textarea class="form-control" id="ubicacionU" name="ubicacionU" rows="1"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </div>
    </div>
</form>