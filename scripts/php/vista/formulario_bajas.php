<?php
  session_start();

  if($_SESSION['u_valido']==false){
    //header('location:pagina_acceso_prohibido.html');
    header('location: login.html');
    
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/af-2.3.7/date-1.1.0/r-2.2.9/rg-1.1.3/sc-2.0.4/sp-1.3.0/datatables.min.css"/>
  <title>BAJAS</title>
  
</head>
<body>
<?php
    require_once('head.php');

    ?>

<?php
        include('../controlador/worldDAO.php');
        $aDAO = new WorldDAO();
        $res = $aDAO->mostrarW();
       
        //var_dump($res);

        if(mysqli_num_rows($res)>0){

            //mysqli_fetch_row  => obtiene datos como un vector normal (indices numericos)
            //mysqli_fetch_assoc  => obtiene datos como un vector asociativo

            echo "<div class='page-content p-5' id='content'><div class='card' style='overflow:scroll;' height='20%' ;>
            <h3 class='card-header text-center font-weight-bold text-uppercase py-4'>
                Eliminar
            </h3>
            <div class='card-body'>
                <div id='table' class='table-editable'>
                    <span class='table-add float-right mb-3 mr-2'><a href='#!' class='text-success'>
                            <i class='fas fa-plus fa-2x' aria-hidden='true'></i></a></span>";
                   echo "<table id='tabla' class='display table table-hover text-nowrap' style='width:50%'>
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Continente</th>
                                <th>Region</th>
                                <th>Superficie</th>
                                <th>Año Indp</th>
                                <th>Población</th>
                                
                            </tr>
                        </thead>";
            

            while($fila = mysqli_fetch_assoc($res)){
                printf("<tr>
                <td>".$fila['Code']."</td>".
                "<td>".$fila['Name']."</td>".
                "<td>".$fila['Continent']."</td>".
                "<td>".$fila['Region']."</td>".
                "<td>".$fila['SurfaceArea']."</td>".
                "<td>".$fila['IndepYear']."</td>".
                "<td>".$fila['Population']."</td>".
                                            
                "<td> <a class='btn btn-danger' href='../controlador/procesar_bajas.php?nc=%s'>ELIMINAR</a> </td> </tr>", $fila['Code'] );

            }

        }else{
            echo "SIN registros para mostrar";
        }
        echo "</table>";
    ?>



</body>

</html>