<?php
require('./db.php');
    $id = $_POST['id'];
    $query = 'DELETE FROM `eventos` WHERE `eventos`.`id`='.$id.';';
    $respuestaServer = $conexion->ejecutarQuery($query);
    $response['msg']='OK';
    echo json_encode($response);
    $conexion->cerrarConexion();
 ?>
