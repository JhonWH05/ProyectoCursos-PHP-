<?php
//pedir permiso(conexion)
include '../bdconexion.php';
//recibir variables
$id=$_GET["id"];
//logica sql
    $consulta1="select * from estudiante where id='$id'";
    $resultado1= mysqli_query($con,$consulta1);

    if($fila= mysqli_fetch_row($resultado1))
    {
        $consulta = "delete from  estudiante where id='$id'";
        $resultado = mysqli_query($con,$consulta);
        if($resultado == 0)
         $campos[]=array( 'respuesta'=>'0');//resultado 2
         else
         $campos[]=array( 'respuesta'=>'1');
    }
       else
       {
          $campos[]=array( 'respuesta'=>'-1');
       }

    //retornar
    echo json_encode($campos);;

?>




