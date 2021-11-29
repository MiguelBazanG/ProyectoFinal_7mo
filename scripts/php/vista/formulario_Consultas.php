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

    <!---->

    <!---->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">


    <title>Consultas</title>
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
                Consultas
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
                "<td>".$fila['Population']."</td>");

            }

        }else{
            echo "SIN registros para mostrar";
        }
        echo "</table>";
    ?>





    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
                } );
    </script>

</body>
</html>