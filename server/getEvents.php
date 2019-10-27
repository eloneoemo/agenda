<?php
session_start();
if($_SESSION['userid']){
    require('./db.php');
    $peticion = 'SELECT * FROM eventos;';
    $respuestaServer = $conexion->ejecutarQuery($peticion);
    $array = array();
    if($respuestaServer->num_rows!=0){
       $array['msg']='OK';
        while($fila = $respuestaServer->fetch_assoc()){
            $array['eventos'][]=$fila;
        } 
        echo json_encode($array);
    }else{
        $array['msg']= "Actualmente no hay registros";
    }
    $conexion->cerrarConexion();}
 ?>
