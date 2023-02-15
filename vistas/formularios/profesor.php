<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CRUD - Datos escuela</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>
<!-- header -->
 <header>
   <?php 
      require_once('../header.php');
    ?>
 </header>
 <br>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-12 col-md-auto">
     <form class="text-center border border-light p-5" action="#!">
          <p class="h4 mb-4">Profesores</p>
          <!-- Name -->
          <input type="number" id="id_profesor" class="form-control mb-4" placeholder="Cedula">
           <!-- Name -->
          <input type="text" id="nombre" class="form-control mb-4" placeholder="Nombres">
           <!-- Name -->
          <input type="text" id="apellido" class="form-control mb-4" placeholder="Apellidos">
           <!-- Name -->
          <input type="number" id="telefono" class="form-control mb-4" placeholder="Telefono">
          
          <!-- Send button -->
          <div class="container">
            <div class="row">
              <div class="col-sm">
              <button class="btn text-white teal accent-3 info btn-block " onclick="validarguardar()" 
              onsubmit="false">Guardar</button>
              </div>
              <div class="col-sm">
              <button class="btn text-white teal accent-3 info btn-block " onclick="validarbuscar()" >Buscar</button>
              </div>
              <div class="col-sm">
              <button class="btn text-white teal accent-3 info btn-block " onclick="validaractualizar()" 
              onsubmit="false">Actualizar</button>
              </div>
              <div class="col-sm">
              <button class="btn text-white teal accent-3 info btn-block " onclick="validareliminar()" 
              onsubmit="false">Eliminar</button>
              </div>
              <div class="col-sm">
              <a class="btn text-white teal accent-3 info btn-block " href="../listar/profesor.html">Listar</a>
              <!-- <button class="btn text-white teal accent-3 info btn-block " href="../listar/profesor.html" 
              onsubmit="false">Listar</button> -->
              </div>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>      
<!-- Default form contact -->

  <!-- SCRIPTS -->
  <!-- controlador -->
  <script type="text/javascript" src="../../controladores/ctlprofesor.js"></script>
  <!-- JQuery -->
  <script type="text/javascript" src="../../controladores/js/jquery-3.4.1.min.js"></script>
  <!-- JQuery -->
  <script type="text/javascript" src="../../controladores/js/jQuery.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../../controladores/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../../controladores/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../../controladores/js/mdb.min.js"></script>
</body>

</html>
