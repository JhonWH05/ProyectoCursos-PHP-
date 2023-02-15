<?php
    include '../../modelos/bdconexion.php';
    $consulta1="select * from profesor";
    $resultado1 = mysqli_query($con,$consulta1);
    
    if(isset($_POST['id_profesor']))
    {
        $id_profesor=$_POST['id_profesor'];
        echo $id_profesor;
    }
?>
<html lang="es">

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
          <p class="h4 mb-4">Curso</p>
          <!-- Name -->
          <input type="number" id="id_curso" class="form-control mb-4" placeholder="Id del curso">
          <!-- Subject -->
          <!-- Name -->
          <input type="text" id="nombre_curso" class="form-control mb-4" placeholder="Nombre de curso">
          <!-- Subject -->
          <label>Profesores</label>
          <select class="browser-default custom-select mb-4" id="id_prof">
              <option value="" selected disabled>Elige un profesor</option>
            <?php 
                        while($id_profesor = mysqli_fetch_array($resultado1))
                        {
                    ?>
              <option value="<?php echo $id_profesor['id_profesor']?>"><?php echo $id_profesor['nombre']?></option>
              <?php
                        }
                    ?>
          </select>
             </form>
          <!-- Send button -->
          <div class="container">
             <div class="row">
              <div class="col-sm">
              <button class="btn text-white teal accent-3 info btn-block " onclick="guardarcurso()" 
              onsubmit="false">Guardar</button>
              </div>
              <div class="col-sm">
              <button class="btn text-white teal accent-3 info btn-block " onclick="buscarcurso()" 
              onsubmit="false">Buscar</button>
              </div>
              <div class="col-sm">
              <button class="btn text-white teal accent-3 info btn-block " onclick="actualizarcurso()" 
              onsubmit="false">Actualizar</button>
              </div>
              <div class="col-sm">
               <button class="btn text-white teal accent-3 info btn-block " onclick="eliminarcurso()" 
              onsubmit="false">Eliminar</button>
              </div>
              <div class="col-sm">
              <a class="btn text-white teal accent-3 info btn-block " href="../listar/curso.html">Listar</a>
            </div>
          </div>
          </div>
   
    </div>
  </div>
</div>      
<!-- Default form contact -->

  <!-- SCRIPTS -->
  <!-- controlador -->
  <script type="text/javascript" src="../../controladores/ctlcurso.js"></script>
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
