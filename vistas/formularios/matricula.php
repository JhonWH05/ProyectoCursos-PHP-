<?php
    include '../../modelos/bdconexion.php';
    $consulta1="select * from estudiante";
    $resultado1 = mysqli_query($con,$consulta1);
    
    if(isset($_POST['id']))
    {
        $id=$_POST['id'];
        echo $id;
    }
?>
<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Matricula</title>
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
          <p class="h4 mb-4">Matricula</p>
          <!-- Name -->
          <input type="number" id="codigo" class="form-control mb-4" placeholder="Codio de matricula">
          <!-- Name -->
          <input type="number" id="valor" class="form-control mb-4" placeholder="Valor">
          <!-- Name -->
          
          <!-- Subject -->
        
          <select class="browser-default custom-select mb-4" id="plan">
              <option selected>Elija un Plan</option>
              <option >ProntoPago</option>
              <option >Ordinario</option>
              <option >Extraordinario</option>           
          </select>

          <select class="browser-default custom-select mb-4" id="id_estu">
              <option value="" selected disabled>Elige un Estudiante</option>
            <?php 
                        while($id = mysqli_fetch_array($resultado1))
                        {
                    ?>
              <option value="<?php echo $id['id']?>"><?php echo $id['nombre']?></option>
              <?php
                        }
                    ?>
          </select>
          </form>
          <!-- Send button -->
          <div class="container">
           <div class="row">
              <div class="col-sm">
              <button class="btn text-white teal accent-3 info btn-block " onclick="validarguardarm()" 
              onsubmit="false">Guardar</button>
              </div>
              <div class="col-sm">
              <button class="btn text-white teal accent-3 info btn-block " onclick="validarbuscarm()" 
              onsubmit="false">Buscar</button>
              </div>
              <div class="col-sm">
              <button class="btn text-white teal accent-3 info btn-block " onclick="actualizarmatricula()" 
              onsubmit="false">Actualizar</button>
              </div>
              <div class="col-sm">
               <button class="btn text-white teal accent-3 info btn-block " onclick="validareliminarm()" 
              onsubmit="false">Eliminar</button>
              </div>
              <div class="col-sm">
              <a class="btn text-white teal accent-3 info btn-block " href="../listar/matricula.html">Listar</a>
            </div>
          </div>
          </div>
      
    </div>
  </div>
</div>      
<!-- Default form contact -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../../controladores/ctlmatricula.js"></script>

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
