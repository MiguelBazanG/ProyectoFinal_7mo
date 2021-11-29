<?php

    //

    include('worldDAO.php');

    //codigo para obtener los datos del formulario

    //Validacion ...(PENDIENTE)

    $aDAO = new WorldDAO();

    $a = $_POST["caja_code"];
    $b = $_POST["caja_name"];
    $c = $_POST["caja_cont"];
    $d = $_POST["caja_reg"];
    $e = $_POST["caja_area"];
    $f = $_POST["caja_yi"];
    $g = $_POST["caja_po"];
    $o = $_POST["caja_ev"];
    $h = $_POST["caja_gnp"];
    $i = $_POST["caja_gnpold"];
    $j = $_POST["caja_nl"];
    $k = $_POST["caja_gb"];
    $l = $_POST["caja_gober"];
    $m = $_POST["caja_cap"];
    $n = $_POST["caja_code2"];
    


    $res = $aDAO->agregarWorld($a,$b,$c,$d,$e,$f,$g,$o,$h,$i,$j,$k,$l,$m,$n);

    //var_dump($res);
    if($res){
        //echo "YA CASI SOY INGENIERO INMORTAL !!!!";
        header('location:../vista/formulario_altas.php');
        //OPCION 1
        //<form
        //<input type=hidden value=exito |fallo 

        //OPCION 2
        //enviar un mensaje de EXITO a traves de SESIONES
      echo '<p class="alert alert-success agileits" role="alert">Captura realizada correctamente!p>';

           
    }
    else{
        //echo "MEJOR ME DEDICO A LAS REDES ='(   ";
        header('location:../vista/formulario_altas.php');
        //enviar un mensaje de FALLO a traves de SESIONES
    }
        

?>