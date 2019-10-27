<?php
    require('./db.php');
    $titulo = $_POST['titulo'];
    $startDate = $_POST['start_date'];
    $allDay = $_POST['allDay'];
    $endDate = $_POST['end_date'];
    $endHour = $_POST['end_hour'];
    $startHour = $_POST['start_hour'];
    $query = 'INSERT INTO eventos (`title`,`start`,`end`,`startTime`,`endTime`,`allDay`) VALUES ("'.$titulo.'","'.$startDate.'","'.$endDate.'","'.$startHour.'","'.$endHour.'","'.$allDay.'");';
    $respuestaServer = $conexion->ejecutarQuery($query);
    $response['msg']='OK';
    echo json_encode($response);
    $conexion->cerrarConexion();
 ?>
