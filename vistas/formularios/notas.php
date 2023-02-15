<?php
    include '../../modelos/bdconexion.php';
    $consulta1="select * from estudiante";
  //  $consulta1="select * from curso";
    $resultado1 = mysqli_query($con,$consulta1);
    
    if(isset($_POST['id']))
    {
        $id=$_POST['id'];
        echo $id;
    }
   
?>
<?php
    include '../../modelos/bdconexion.php';
    $consult="select * from curso";
  //  $consulta1="select * from curso";
    $res = mysqli_query($con,$consult);
    
    if(isset($_POST['id_curso']))
    {
        $id_curso=$_POST['id_curso'];
        echo $id_curso;
    }
   
?>
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
          <p class="h4 mb-4">Notas</p>
          <!-- Name -->
          <input type="text" id="id_nota" class="form-control mb-4" placeholder="Codio de nota">
          <!-- Subject -->
          <label>Cedula Estudiante</label>
          <select class="browser-default custom-select mb-4" id="id_alumno">
              <option value="" selected disabled>Estudiante</option>
            <?php 
                        while($id = mysqli_fetch_array($resultado1))
                        {
                    ?>
              <option value="<?php echo $id['id']?>"><?php echo $id['id']?></option>
              <?php
                        }
                    ?>
          </select>
          <!-- Subject -->
          <label>Id del curso</label>
          <select class="browser-default custom-select mb-4" id="id_curso">
              <option value="" selected disabled>Curso</option>
            <?php 
                        while($id_curso = mysqli_fetch_array($res))
                        {
                    ?>
              <option value="<?php echo $id_curso['id_curso']?>"><?php echo $id_curso['nombre_curso']?></option>
              <?php
                        }
                    ?>
          </select>
          
          <!-- Name -->
          <input type="text" id="nota1" class="form-control mb-4" placeholder="nota 1">
         
          <input type="text" id="nota2" class="form-control mb-4" placeholder="nota 2">
          
          <input type="text" id="nota3" class="form-control mb-4" placeholder="nota 3">

          <!-- Send button -->
          </form>
          <div class="container">
             <div class="row">
              <div class="col-sm">
              <button class="btn text-white teal accent-3 info btn-block " onclick="guardarnota()" 
              onsubmit="false">Guardar</button>
              </div>
              <div class="col-sm">
              <button class="btn text-white teal accent-3 info btn-block " onclick="buscarnotas()" 
              onsubmit="false">Buscar</button>
              </div>
              <div class="col-sm">
              <button class="btn text-white teal accent-3 info btn-block " onclick="actualizarnotas()" 
              onsubmit="false">Actualizar</button>
              </div>
              <div class="col-sm">
               <button class="btn text-white teal accent-3 info btn-block " onclick="eliminarnotas()" 
              onsubmit="false">Eliminar</button>
              </div>
              <div class="col-sm">
              <a class="btn text-white teal accent-3 info btn-block " href="../listar/notas.html">Listar</a>
            </div>
          </div>
          </div>
      
    </div>
  </div>
</div>      
<!-- Default form contact -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../../controladores/ctlnotas.js"></script>
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
