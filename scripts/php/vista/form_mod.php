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
    <title>Document</title>
    <style>
        input{
            padding: 0;
            margin: 0;
        }
        th, td{
            
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>

<h3 style="background-color:red;
                text-align: center;
                padding: 15px;"> Modificar World </h3>

<?php
        include('../controlador/worldDAO.php');
        $aDAO = new WorldDAO();
        $id = $_GET["id"];
        //var_dump($id);
        $res = $aDAO->mostrarAlumnosPorNc($id);

        //$ruta = "procesar_mod.php";
        //var_dump($res);

        if(mysqli_num_rows($res)>0){

            //mysqli_fetch_row  => obtiene datos como un vector normal (indices numericos)
            //mysqli_fetch_assoc  => obtiene datos como un vector asociativo


                   echo "<form action='procesar_mod.php' method='post'><br><table id='tabla' class='display table table-hover text-nowrap' style='width:50%'>
                        <thead>
                            <tr>
                                <th>Nombre</th> 
                                <th>Primer_Ap</th>
                                <th>Segundo_AP</th>
                                <th>Edad</th>
                                <th>Semestre</th>
                                <th>Carrera</th>
                                <th>opciones</th>
                                
                            </tr>
                        </thead>";
            
            while($fila = mysqli_fetch_assoc($res)){
                printf("<tr>
                <td><input type='hidden' value='". $fila["Code"]."' name='Code'></input>
                <input type='text' value='". $fila["Name"]."' name='Name'></input></td><br>".

                "<td><input type='text' value='". $fila["Continent"]."' name='Continent'></input></td>".

                "<td><input type='text' value='". $fila["Region"]."' name='Region'></input></td>".

                "<td><input type='text' value='". $fila["SurfaceArea"]."' name='SurfaceArea'></input></td>".

                "<td><input type='text' value='". $fila["IndepYear"]."' name='IndepYear'></input></td>".

                "<td><input type='text' value='". $fila["Population"]."'name='Population'></input></td>".

                "<td><input type='text' value='". $fila["LifeExpectancy"]."'name='LifeExpectancy'></input></td>".

                "<td><input type='text' value='". $fila["GNP"]."'name='GNP'></input></td>".

                "<td><input type='text' value='". $fila["GNPOld"]."'name='GNPOld'></input></td>".

                "<td><input type='text' value='". $fila["LocalName"]."'name='LocalName'></input></td>".

                "<td><input type='text' value='". $fila["GovernmentForm"]."'name='GovernmentForm'></input></td>".

                "<td><input type='text' value='". $fila["HeadOfState"]."'name='HeadOfState'></input></td>".

                "<td><input type='text' value='". $fila["Capital"]."'name='Capital'></input></td>".

                "<td><input type='text' value='". $fila["Code2"]."'name='Code2'></input></td>".

               


                "<td><input type='submit' value='Actualizar'></input></td>"                       
                
            );

            }

        }else{
            echo "SIN registros para mostrar";
        }
        echo "</table> </form> ";
    ?>
    
</body>
</html>
