<!-- Modal -->
<form id="frmAgregarUsuario" method="POST" onsubmit="return agregarNuevoUsuario()">
    <div class="modal fade" id="modalAgregarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar un nuevo usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 5px;">
                    <div class="col-sm-4">
                        <label for="paterno" class="form-label">Apellido paterno</label>
                        <input type="text" class="form-control" id="paterno" name="paterno" placeholder="Paterno" required>
                    </div>

                    <div class="col-sm-4">
                        <label for="materno" class="form-label">Apellido materno</label>
                        <input type="text" class="form-control" id="materno" name="materno" placeholder="Materno" required>
                    </div>

                    <div class="col-sm-4">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>
                </div>

                <div class="row" style="padding-bottom: 5px;">
                    <div class="col-sm-4">
                        <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha nacimiento">
                    </div>

                    <div class="col-sm-4">
                        <label for="sexo" class="form-label">Sexo</label>
                        <select class="form-control" id="sexo" name="sexo">
                            <option value=""></option>
                            <option value="F">Femenino</option>
                            <option value="M">Masculino</option>
                        </select>
                    </div>

                    <div class="col-sm-4">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
                    </div>
                </div>

                <div class="row" style="padding-bottom: 5px;">
                    <div class="col-sm-4">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo">
                    </div>

                    <div class="col-sm-4">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                    </div>

                    <div class="col-sm-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Contraseña">
                    </div>
                </div>

                <div class="row" style="padding-bottom: 5px;">
                    <div class="col-sm-12">
                        <label for="idRol" class="form-label">Rol de usuario</label>
                        <select class="form-control" id="idRol" name="idRol" required>
                            <option value="1">Cliente</option>
                            <option value="2">Administrador</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <label for="ubicacion" class="form-label">Describir ubicación</label>
                        <textarea class="form-control" id="ubicacion" name="ubicacion" rows="1"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</span>
                <button class="btn btn-primary">Agregar</button>
            </div>
        </div>
    </div>
    </div>
</form>