$(document).ready(function() {
    $('#tablaReporteAdminLoad').load('reportesAdmin/tablaReportesAdmin.php');
});

function eliminarReporteAdmin(idReporte) {
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
                data: "idReporte= " + idReporte,
                url: "../procesos/reportesCliente/eliminarReporteCliente.php",
                success: function(respuesta) {
        
                    if (respuesta == 1) {
                        $('#tablaReporteAdminLoad').load('reportesAdmin/tablaReportesAdmin.php');
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

function obtenerDatosSolucion(idReporte) {
    $.ajax({
        type: "POST",
        data: "idReporte=" + idReporte,
        url: "../procesos/reportesAdmin/obtenerSolucion.php",
        success: function(respuesta) {
            respuesta = jQuery.parseJSON(respuesta);
            $('#idReporte').val(respuesta['idReporte']);
            $('#solucion').val(respuesta['solucion']);
            $('#estatus').val(respuesta['estatus']);
        }
    });
}

function agregarSolucionReporte() {
    $.ajax({
        type: "POST",
        data: $('#frmAgregarSolucionReporte').serialize(),
        url: "../procesos/reportesAdmin/actualizarSolucion.php",
        success: function(respuesta) {
            respuesta = respuesta.trim();

            if (respuesta == 1) {
                Swal.fire(":D", "Agregado con éxto!", "success");
                $('#tablaReporteAdminLoad').load('reportesAdmin/tablaReportesAdmin.php');
            } else {
                Swal.fire(":(", "Error al agregar!" + respuesta, "error");
            }
        }
    });

    return false;
}