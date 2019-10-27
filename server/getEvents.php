<?php
session_start();
$array = array();
if($_SESSION['userid']){
    require('./db.php');
    $peticion = 'SELECT * FROM eventos WHERE fk_usuario='.$_SESSION['userid'].';';
    $respuestaServer = $conexion->ejecutarQuery($peticion);    
    $array['msg']='OK';
    if($respuestaServer->num_rows!=0){       
        while($fila = $respuestaServer->fetch_assoc()){
            $array['eventos'][]=$fila;
        }
    }
    echo json_encode($array);
    $conexion->cerrarConexion();
}else{
    $array['msg']= "Favor de loguearse!";
    echo json_encode($array);
}
 ?>
