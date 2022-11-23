
$(document).ready(function(){
    $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
});

function agregarNuevoUsuario(){

    $.ajax({
        type: "POST",
        data: $('#frmAgregarUsuario').serialize(),
        url: "../procesos/usuarios/crud/agregarNuevoUsuario.php",
        success:function(respuesta){
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
                $('#frmAgregarUsuario')[0].reset();
                Swal.fire(":)", "Agregado con exito!" + respuesta, "success");
            } else {
                Swal.fire(":(", "Error al agregar!" + respuesta, "error");
            }
        }
    });

    return false;
}

function obtenerDatosUsuario(idUsuario) {
    $.ajax({
        type: "POST",
        data: "idUsuario=" + idUsuario,
        url: "../procesos/usuarios/crud/obtenerDatosUsuario.php",
        success:function(respuesta){
            respuesta = jQuery.parseJSON(respuesta);
            $('#idUsuario').val(respuesta['idUsuario']);
            $('#paternoU').val(respuesta['paterno']);
            $('#maternoU').val(respuesta['materno']);
            $('#nombreU').val(respuesta['nombrePersona']);
            $('#fechaNacimientoU').val(respuesta['fechaNacimiento']);
            $('#sexoU').val(respuesta['sexo']);
            $('#telefonoU').val(respuesta['telefono']);
            $('#correoU').val(respuesta['correo']);
            $('#usuarioU').val(respuesta['nombreUsuario']);
            $('#idRolU').val(respuesta['idRol']);
            $('#ubicacionU').val(respuesta['ubicacion']);
        }
    });
}

function actualizarUsuario(){
    $.ajax({
        type: "POST",
        data: $('#frmActualizarUsuario').serialize(),
        url: "../procesos/usuarios/crud/actualizarUsuario.php",
        success: function(respuesta) {
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
                $('#modalActualizarUsuarios').modal('hide');
                Swal.fire(":D", "Actualizado con exito!", "success");
            } else {
                Swal.fire(":(", "Error al actualizar!" + respuesta, "error");
            }
        }
    });

    return false;
}

function agregarIdUsuarioReset(idUsuario) {
    $('#idUsuarioReset').val(idUsuario);
}

function resetPassword() {
    $.ajax({
        type: "POST",
        data: $('#frmActualizaPassword').serialize(),
        url: "../procesos/usuarios/extras/resetPassword.php",
        success: function(respuesta) {
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                $('#modalResetPassword').modal('hide');
                Swal.fire(":D", "Contraseña cambiada!", "success");
            } else {
                Swal.fire(":(", "Error al actualizar la contraseña!" + respuesta, "error");
            }
        }
    });

    return false;
}

function cambioEstatusUsuario(idUsuario, estatus) {
    $.ajax({
        type: "POST",
        data: "idUsuario=" + idUsuario + "&estatus=" + estatus,
        url: "../procesos/usuarios/extras/cambioEstatus.php",
        success: function(respuesta) {
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
                Swal.fire(":D", "Cambio de estatus con éxito", "success");
            } else {
                Swal.fire(":(", "Error al intentar cambiar el estatus!" + respuesta, "error");
            }
        }
    });
}

function eliminarUsuario(idUsuario, idPersona) {
    Swal.fire({
        title: 'Seguro deseas elimiar el registro?',
        text: "Una vez eliminado no podrá ser recuperado!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                data: "idUsuario=" + idUsuario + "&idPersona=" + idPersona,
                url: "../procesos/usuarios/crud/eliminarUsuario.php",
                success: function(respuesta) {
                    respuesta = respuesta.trim();
                    if (respuesta == 1) {
                        $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
                        Swal.fire(":D", "Usuario eliminado con éxito", "warning");
                    } else {
                        Swal.fire(":(", "Error al eliminar el usuario!" + respuesta, "error");
                    }
                }
            });
        }
    })

    return false;
}