$(document).ready(function() {
    $('#tablaReporteClienteLoad').load('reportesCliente/tablaReporteCliente.php');
});

function agregarNuevoReporte() {
    
    $.ajax({
        type: "POST",
        data: $('#frmNuevoReporte').serialize(),
        url: "../procesos/reportesCliente/agregarNuevoReporte.php",
        success: function(respuesta){
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                $('#tablaReporteClienteLoad').load('reportesCliente/tablaReporteCliente.php');
                $('#frmNuevoReporte').modal('hide');
                Swal.fire(":D", "Actualizado con exito!", "success");
            } else {
                Swal.fire(":(", "Error al actualizar!" + respuesta, "error");
            }
        }
    });
    return false;
}

function eliminarReporteCliente(idReporte) {
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
                        $('#tablaReporteClienteLoad').load('reportesCliente/tablaReporteCliente.php');
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