<?php
    include('conexion.php');

    $obj = new Conexion;

    $id = $_POST['id'];
    
    $detalleM = $obj->detallesM($id);
    
    if($detalleM == 1){
         $datos = array('dato' => 'ok');
     }else{
         $detalleM = array('dato' => 'no');
     }
     echo json_encode($datos, JSON_FORCE_OBJECT);
?>