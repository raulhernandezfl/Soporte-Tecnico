$(document).ready(function(){
    $('#tablaAsignacionesLoad').load('asignacion/tablaAsignacion.php');
}); 

function asignarEquipo() {
    $.ajax({
        type: "POST",
        data: $('#frmAsignaEquipo').serialize(),
        url: "../procesos/asignacion/asignar.php",
        success: function(respuesta){
            respuesta = respuesta.trim();

            if (respuesta == 1) {
                $('#frmAsignaEquipo')[0].reset();
                $('#tablaAsignacionesLoad').load('asignacion/tablaAsignacion.php');
                Swal.fire(":D", "Agregado con éxto!", "success");
            } else {
                Swal.fire(":(", "Error al agregar!" + respuesta, "error");
            }
        }
    });

    return false;
}

function eliminarAsignacion(idAsignacion) {
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
                data: "idAsignacion= " + idAsignacion,
                url: "../procesos/asignacion/eliminarAsignacion.php",
                success: function(respuesta) {
        
                    if (respuesta == 1) {
                        $('#tablaAsignacionesLoad').load('asignacion/tablaAsignacion.php');
                        Swal.fire(":D", "Eliminado con éxto!", "success");
                    } else {
                        Swal.fire(":(", "Error al eliminar!" + respuesta, "error");
                    }
        
                }
            });
        }
    })

    return false;
}