<?php
    require('./db.php');
    $peticion = ('SELECT * FROM usuarios WHERE correo="'.$_POST['username'].'" AND pssw="'.$_POST['password'].'";');
    $respuestaServer = $conexion->ejecutarQuery($peticion);
    if($respuestaServer->num_rows!=0){
        session_start();
        $response['msg'] = 'OK';
        $fila = $respuestaServer->fetch_assoc();
        $_SESSION['userid'] = $fila['id'];
        $_SESSION['name'] = $fila['nombre'];        
    }else{
        $response['msg'] = 'Usuario y clave incorrectos';
    }
    echo json_encode($response);
    $conexion->cerrarConexion();
 ?>
