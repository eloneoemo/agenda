<?php
require('./db.php');

class NewUsuario {
    private $nombre;
    private $pssw;
    private $correo;
    private $fechaNacimiento;
    function __construct($nombre, $pssw, $correo, $fechaNacimiento)
    {
        $this->nombre = $nombre;
        $this->password = $pssw;
        $this->correo = $correo;
        $this->fechaDeNacimiento = $fechaNacimiento;

    }
    function crearUsuario (){
        return 'INSERT INTO usuarios (`nombre`, `pssw`, `correo`, `fecha_nacimiento`) VALUES ("'.$this->nombre.'","'.$this->password.'","'.$this->correo.'","'.$this->fechaDeNacimiento.'");';        
    }

}

$usuario = new NewUsuario('Juan Almonte',md5('1234'),'juan@yahoo.com','1993-05-10');
$peticionUsuarioA = $usuario->crearUsuario();
$respuestaServer = $conexion->ejecutarQuery($peticionUsuarioA);

$usuarioB = new NewUsuario('Ester Cespedes',md5('aCkw12'),'ester@gmail.com','1991-01-15');
$peticionUsuarioB = $usuarioB->crearUsuario();
$respuestaServer = $conexion->ejecutarQuery($peticionUsuarioB);

$usuarioC = new NewUsuario('Jonathan Quezada',md5('Jq_1994'),'josuecss@yahoo.com','1994-05-11');
$peticionUsuarioC = $usuarioC->crearUsuario();
$respuestaServer = $conexion->ejecutarQuery($peticionUsuarioC);




?>