<?php

    include('worldDAO.php');

    //codigo para obtener los datos del formulario

    //Validacion ...(PENDIENTE)

    $aDAO = new WorldDAO();

    //obtener el numero de control ?????
    $nc = $_GET['nc'];

    $aDAO->eliminarAlumno($nc);

    header('location:../vista/formulario_bajas.php');

?>