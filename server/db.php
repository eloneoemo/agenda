<?php
class ConexionDB  {        
    private $host;
    private $user;
    private $pssw;
    private $conexion;

    function __construct($host,$user,$pssw)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pssw = $pssw;

    }
    function iniciarConexion ($nombredatabase){
        $this->conexion = new mysqli($this->host,$this->user,$this->pssw,$nombredatabase);

        if($this->conexion->connect_error){
            return 'Error: '.$this->conexion->connect_error;
        }else{
            return 'OK';
        }
    }
    function ejecutarQuery ($query){
        return $this->conexion->query($query);
    }
    function cerrarConexion(){
        $this->conexion->close();
    }
}
    $conexion = new ConexionDB('localhost','dbuser','1234');
    $response['conexion'] = $conexion->iniciarConexion('nextu');
?>