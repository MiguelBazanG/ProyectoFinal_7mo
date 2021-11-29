<?php 
class ConexionBDu{
    private $conexion;

    private $host = 'localhost:3306';
    private $usuario = 'root';
    private $contraseña = 'losdec211299';
    private $bd = 'UBD';

    public function __construct(){
        //Java this.host=
        $this->conexion = mysqli_connect($this->host,
        $this->usuario,
        $this->contraseña,
        $this->bd);
        if(!$this->conexion)
        die("error en conecion de mysql" . mysqli_connect_error() . mysqli_connect_errno());
        //else 
        //echo "<h1>Exito!!!</h1>";

    }
    public function getConexion(){
        return $this->conexion;
    }
}

?>