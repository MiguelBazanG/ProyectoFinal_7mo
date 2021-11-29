<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include('../controlador/worldDAO.php');

    $nc = $_POST['Code'];
    $n = $_POST['Name'];
    $pa = $_POST['Continent'];
    $sa = $_POST['Region'];
    $e = $_POST['SurfaceArea'];
    $s = $_POST['IndepYear'];
    $c = $_POST['Population'];
    $d = $_POST['LifeExpectancy'];
    $f = $_POST['GNP'];
    $g = $_POST['GNPOld'];
    $h = $_POST['LocalName'];
    $i = $_POST['GovernmentForm'];
    $j = $_POST['HeadOfState'];
    $k = $_POST['Capital'];
    $l = $_POST['Code2'];
var_dump($nc);
   
        $aDAO = new worldDAO();

       $resultado = $aDAO->modificarAlumno($nc, $n, $pa, $sa, $e, $s, $c,$d, $f, $g, $h, $i, $j, $k, $l);
       //var_dump($resultado);
        if ($resultado) {
            echo "<script>alert(' se údo insertar datos')</script>";
            header('location:formulario_mod.php');
            
       
        }else {
            echo "<script>alert('no se údo insertar datos')</script>";
        }

?>

<script></script>
</body>
</html>