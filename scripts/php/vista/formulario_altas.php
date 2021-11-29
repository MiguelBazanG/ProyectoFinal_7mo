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
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
   <script src="../../javaScripts/validacion_cam_va.js"></script>
    <title>Formulario Altas</title>
</head>
<body>
    <?php
    require_once('head.php');

    ?>

    
<div class="page-content p-5" id="content">
<div class="container" id="advanced-search-form">
        <h2>ALTAS:</h2>
        <form action="../controlador/procesar_altas.php" method="POST">
            <div class="form-group">
                <label for="first-name">Código:</label>
                <input type="text" class="form-control" placeholder="Código" id="caja_code" name="caja_code" maxlength="3">
            </div>
            <div class="form-group">
                <label for="last-name">Nombre País:</label>
                <input type="text" class="form-control" placeholder="Last name" id="caja_name" name="caja_name">
            </div>
            <div class="form-group">
                <label for="last-name">Continente:</label>
                <select id="caja_cont" name="caja_cont" class="form-control">
        <option selected>Elige una Opción...</option>
        <option>Asia</option>
        <option>Europe</option>
        <option>North America</option>
        <option>Africa</option>
        <option>Oceania</option>
        <option>Antarctica</option>
        <option>South America</option>
      </select><br>
            </div>
            <div class="form-group">
                <label for="last-name">Región:</label>
                <input type="text" class="form-control" placeholder="Last name" id="caja_reg" name="caja_reg">
            </div>
            <div class="form-group">
                <label for="last-name">Superficie:</label>
                <input type="number" class="form-control" placeholder="Last name" id="caja_area" name="caja_area">
            </div>
            <div class="form-group">
                <label for="last-name">Año Indp</label>
                <input type="number" class="form-control" placeholder="Last name" id="caja_yi" name="caja_yi">
            </div>
            <div class="form-group">
                <label for="last-name">Población:</label>
                <input type="number" class="form-control" placeholder="Last name" id="caja_po" name="caja_po">
            </div>
            <div class="form-group">
                <label for="last-name">Expect. Vida:</label>
                <input type="number" class="form-control" placeholder="Last name" id="caja_ev" name="caja_ev">
            </div>
            <div class="form-group">
                <label for="last-name">GNP:</label>
                <input type="number" class="form-control" placeholder="Last name" id="caja_gnp" name="caja_gnp">
            </div>
            <div class="form-group">
                <label for="country">GNPOld:</label>
                <input type="number" class="form-control" placeholder="Country" id="caja_gnpold" name="caja_gnpold">
            </div>
            <div class="form-group">
                <label for="number">Nombre local:</label>
                <input type="text" class="form-control" placeholder="Phone number" id="caja_nl" name="caja_nl">
            </div>
            <div class="form-group">
                <label for="age">Forma de Gobierno:</label>
                <input type="text" class="form-control" placeholder="Age" id="caja_gb" name="caja_gb">
            </div>
            <div class="form-group">
                <label for="email">Gobernante:</label>
                <input type="text" class="form-control" placeholder="Email" id="caja_gober" name="caja_gober">
            </div>
            <div class="form-group">
                <label for="category">Capital Monetario</label>
                <input type="text" class="form-control" placeholder="Category" id="caja_cap" name="caja_cap">
            </div>
            <div class="form-group">
                <label for="education">Código 2:</label>
                <input type="text" class="form-control" placeholder="Education" id="caja_code2" name="caja_code2" maxlength="2">
            </div>
                <div class="clearfix"></div>
            <button type="submit" class="btn btn-primary btn-lg btn-responsive" id="search" onclick=" return validarformva()">Agregar</button>
        </form>
    </div>
    </div>
   
</body>
</html>
