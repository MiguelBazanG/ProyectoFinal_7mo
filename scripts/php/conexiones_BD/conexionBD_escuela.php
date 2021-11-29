<?php
    class Conexion{	 
        private $conexion;
        private $host = 'localhost:3306';
        private $usuario = 'root';
        private $contraseña = 'losdec211299';
        private $bd = 'world';         		        			
    public function __construct(){
        //Java this.host=
        $this->conexion = mysqli_connect($this->host,
        $this->usuario,
        $this->contraseña,
        $this->bd);
        if(!$this->conexion){
            die("error en conecion de mysql" . mysqli_connect_error() . mysqli_connect_errno()); 
        }else{

        }
    }
    public function getConexion(){
        return $this->conexion;
    }
    }
?>
