<?php
    require('./db.php');
    $id = $_POST['id'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
    $endHour = $_POST['end_hour'];
    $startHour = $_POST['start_hour'];

    $query = 'UPDATE `eventos` SET `start` = "'.$startDate.'", `end` = "'.$endDate.'", `startTime` = "'.$startHour.'", `endTime` = "'.$endHour.'" WHERE `eventos`.`id` = '.$id.';';

    $respuestaServer = $conexion->ejecutarQuery($query);
    $response['msg']='OK';
    echo json_encode($response);
    $conexion->cerrarConexion();

 ?>
