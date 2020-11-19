<?php
    include('conexion.php');

    $obj = new Conexion;

    $nombre = $_POST['nombreRegistro'];
    $apellidos = $_POST['apellidosRegistro'];
    $usuario = $_POST['usuarioRegistro'];
    $correo = $_POST['emailRegistro'];
    $contra = $_POST['contrasenaRegistro'];
    $confirmar = $_POST['confirmarRegistro'];

    $res = $obj->insertarUsuario($nombre, $apellidos, $usuario, $correo, $contra, $confirmar);
    
    if($res == 1){
        $datos = array('dato' => 'ok');
    }else{
        $datos = array('dato' => 'no');
    }
   
    echo json_encode($datos, JSON_FORCE_OBJECT);
?>