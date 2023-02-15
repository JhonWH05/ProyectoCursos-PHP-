<?php
//pedir permiso(conexion)
include '../bdconexion.php';
//recibir variables
$id_profesor=$_GET["id_profesor"];
//logica sql
    $consulta1="select * from profesor where id_profesor='$id_profesor'";
    $resultado1= mysqli_query($con,$consulta1);

    if($fila= mysqli_fetch_row($resultado1))
    {
        $consulta = "delete from  profesor where id_profesor='$id_profesor'";
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




