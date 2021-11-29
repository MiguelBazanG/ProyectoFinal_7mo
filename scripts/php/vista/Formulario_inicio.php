<?php
    session_start();
    $inactividad = 60;
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
    <link rel="stylesheet" href="../../../estilos/bootstrap.css">
    <link rel="stylesheet" href="../../../estilos/datatables.min.css">
    
    
    <title>Document</title>
</head>
<body>
    <?php
        require_once('head.php');
    ?>
    <div class="page-content p-2" id="content">
    <div>
    <div class='card' style='overflow:scroll;' height='30%';>
            <h3 class='card-header text-center font-weight-bold text-uppercase py-4'>
                Consultas
            </h3>
            <div class='card-body'>
                <div id='table' class='table-editable'>
                <span class='table-add float-right mb-3 mr-2'><a href='#!' class='text-success'>
                <i class='fas fa-plus fa-2x' aria-hidden='true'></i></a
                ></span>
                
    <table id="example" class="display table table-hover text-nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Continente</th>
                <th>Población</th>
                <th>Froma de gob</th>
                <th>Governante</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
        <tfoot>
            <tr>
            <th>Código</th>
                <th>Nombre</th>
                <th>Continente</th>
                <th>Población</th>
                <th>Froma de gob</th>
                <th>Governante</th>
            </tr>
        </tfoot>
    </table>
                </div>
            </div>
    <script src="../../javaScripts/jquery.min.js"></script>
    <script src="../../javaScripts/bootstrap.js"></script>
    <script src="../../javaScripts/datatables.min.js"></script>
       
</body>
</html>