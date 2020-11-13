<?php
    include('conexion.php');

    $obj = new Conexion;

    $name = $_POST['nombre'];
    $email = $_POST['correo'];
    $asunto = $_POST['telefono'];
    $msg = $_POST['mensaje'];

   $comentario = $obj->guardarComentarios($name, $email, $telefono, $msg);
   if($comentario == 1){
        $datos = array('dato' => 'ok');
    }else{
        $datos = array('dato' => 'no');
    }
    echo json_encode($datos, JSON_FORCE_OBJECT);
?>