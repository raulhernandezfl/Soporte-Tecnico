<?php 

    $datos = array(
        'idUsuario' => $_POST['idUsuario'],
        'paterno' => $_POST['paternoU'],
        'materno' => $_POST['maternoU'],
        'nombre' => $_POST['nombreU'],
        'fechaNacimiento' => $_POST['fechaNacimientoU'],
        'sexo' => $_POST['sexoU'],
        'telefono' => $_POST['telefonoU'],
        'correo' => $_POST['correoU'],
        'usuario' => $_POST['usuarioU'],
        'idRol' => $_POST['idRolU'],
        'ubicacion' => $_POST['ubicacionU']
    );

    include "../../../clases/Usuarios.php";
    $Usuarios = new Usuarios();
    echo $Usuarios->actualizarUsuario($datos);
?>