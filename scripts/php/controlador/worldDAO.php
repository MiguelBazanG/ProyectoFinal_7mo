<?php

    include('../conexiones_BD/conexionBD_escuela.php');

    class WorldDAO{

        private $conexion;

        public function __construct(){
            $this->conexion = new Conexion();
        }

        //------------------------ METODOS ABCC --------------------------------

        // ========= ALTAS 
        public function agregarWorld($nc, $n, $pa, $sa, $e, $s, $c, $ab, $ac, $ax, $az, $as, $aq, $ae,$re){
            $sql = "INSERT INTO country VALUES ('$nc', '$n', '$pa', '$sa', $e, $s, $c, $ab, $ac, $ax, '$az', '$as','$aq', $ae,'$re')";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

        //====== BAJAS
        public function eliminarAlumno($nc){
            $sql = "DELETE FROM country WHERE Code='$nc'";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

        //modificar

       
        public function modificarAlumno($nc, $n, $pa, $sa, $e, $s, $c, $ab, $ac, $ax, $az, $as, $aq, $ae,$re){

            $sql = "UPDATE country SET Name = '$n', Continent = '$pa', Region = '$sa', SurfaceArea = $e, IndepYear = $s, Population = $c , LifeExpectancy = $ab, GNP = $ac, GNPOld = $ax, LocalName = '$az', GovernmentForm = '$as', HeadOfState = '$aq', Capital = $ae, Code2 = '$re' WHERE Code = '$nc'";
             $res = mysqli_query($this->conexion->getConexion(), $sql);
             return $res;
            }
           
        public function mostrarAlumnosPorNc($nc){
            $sql = "SELECT * FROM country where Code ='$nc'";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }



        //======CAMBIOS


        //======CONSULTAS
        public function mostrarW(){
            $sql = "SELECT * FROM country";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }


        



    }//class Alumno

?>