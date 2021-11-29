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
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../estilos/styles.css">
    <title>Modificar</title>
</head>
<body>


<?php
        include('../controlador/worldDAO.php');
        $aDAO = new WorldDAO();
        $id = $_GET["id"];
        var_dump($id);
        $res = $aDAO->mostrarAlumnosPorNc($id);?>
        
       

<?php 
if(mysqli_num_rows($res)>0){



while($fila = mysqli_fetch_assoc($res)){
    printf("
    <div class='page-content p-5' id='content'>
    <div class='container' id='advanced-search-form'>
        <h2>Modificar:</h2>
    <form action='procesar_mod.php' method='POST'>
    <div class='form-group'>
        <label for='first-name'>Código:</label>
        <input type='hidden' value='". $fila["Code"]."' name='Code' class='form-control'>
    </div>
    <div class='form-group'>
        <label for='last-name'>Nombre País:</label>
        <input type='text' class='form-control' value='". $fila["Name"]."' name='Name'>
    </div>
    <div class='form-group'>
        <label for='country'>Continente:</label>
        <input id='caja_cont'value='". $fila["Continent"]."' name='Continent' class='form-control'>
    </div>
    <div class='form-group'>
        <label for='number'>Región:</label>
        <input type='text' class='form-control' value='". $fila["Region"]."' name='Region'>
    </div>
    <div class='form-group'>
        <label for='number'>Superficie:</label>
        <input type='text' class='form-control' value='". $fila["SurfaceArea"]."' name='SurfaceArea'>
    </div>
    <div class='form-group'>
        <label for='number'>Año Indp:</label>
        <input type='text' class='form-control' value='". $fila["IndepYear"]."' name='IndepYear'>
    </div>
    <div class='form-group'>
        <label for='number'>Población:</label>
        <input type='text' class='form-control' value='". $fila["Population"]."'name='Population'>
    </div>
    <div class='form-group'>
        <label for='number'>Exp. Vida:</label>
        <input type='text' class='form-control' value='". $fila["LifeExpectancy"]."'name='LifeExpectancy'>
    </div>
    <div class='form-group'>
        <label for='number'>GNP</label>
        <input type='text' class='form-control' value='". $fila["GNP"]."'name='GNP'>
    </div>
    <div class='form-group'>
        <label for='number'>GNPOld</label>
        <input type='text' class='form-control' value='". $fila["GNPOld"]."'name='GNPOld'>
    </div>
    <div class='form-group'>
        <label for='number'>Nombre Local:</label>
        <input type='text' class='form-control' value='". $fila["LocalName"]."'name='LocalName'>
    </div>
    <div class='form-group'>
        <label for='age'>Forma De Gobierno:
        </label>
        <input type='text' class='form-control' value='". $fila["GovernmentForm"]."'name='GovernmentForm'>
    </div>
    <div class='form-group'>
        <label for='email'>Gobernante:</label>
        <input type='text' class='form-control' value='". $fila["HeadOfState"]."'name='HeadOfState'>
    </div>
    <div class='form-group'>
        <label for='category'>Capital Monetario:</label>
        <input type='text' class='form-control' value='". $fila["Capital"]."'name='Capital'>
    </div>
    <div class='form-group'>
        <label for='education'>Código2</label>
        <input type='text' class='form-control' value='". $fila["Code2"]."'name='Code2'>
    </div>
    
    <div class='clearfix'></div>
    <button type='submit' class='btn btn-info btn-lg btn-responsive' id='search'>MODIFICAR</button>");

}

}else{
echo "SIN registros para mostrar";
}
echo " </form> </div> </div>";
?>


   
</body>
</html>