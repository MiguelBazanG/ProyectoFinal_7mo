<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="shortcut icon" href="../../../assets/images/m.svg">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="../../../assets/images/m.svg">
<link rel="stylesheet" href="../../../estilos/header.css">
  <script href="../../../javaScripts/header.js"> </script>
  <script>
    $(function() {
      $('#sidebarCollapse').on('click', function() {
        $('#sidebar, #content').toggleClass('active');
      });
    });
  </script>
</head>

<body>

  <!-- Vertical navbar -->
  <div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center"><img src="https://bootstrapious.com/i/snippets/sn-v-nav/avatar.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
        
          <h6 class="m-0"><?php echo "Bienvenido " . $_SESSION['usuario']; ?></h6>
          <br>

          <br>
          <form class="font-weight-light text-muted mb-0" action="../controlador/cerrar_sesion.php" method="POST" >            
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cerrar Sesión</button>
          </form>
          
        </div>
      </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Menú</p>

    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="Formulario_inicio.php" class="nav-link text-dark font-italic bg-light">
          <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
          Inicio
        </a>
      </li>
      <li class="nav-item">
        <a href="formulario_altas.php" class="nav-link text-dark font-italic">
          <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
          Altas
        </a>
      </li>
      <li class="nav-item">
        <a href="formulario_bajas.php" class="nav-link text-dark font-italic">
          <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
          Bajas
        </a>
      </li>
      <li class="nav-item">
        <a href="formulario_mod.php" class="nav-link text-dark font-italic">
          <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
          Modificacion
        </a>
      </li>
      <li class="nav-item">
        <a href="formulario_Consultas.php" class="nav-link text-dark font-italic">
          <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
          Consultas
        </a>
      </li>
    </ul>
  </div>
  <!-- End vertical navbar -->


  <!-- Page content holder -->
  <div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"><img src="../../../assets/images/m.svg"  style="height: 1.8rem;">Menú</small></button>
    

  </div>

</body>

</html>