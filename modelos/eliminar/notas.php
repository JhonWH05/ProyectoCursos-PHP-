<?php
//pedir permiso(conexion)
include '../bdconexion.php';
//recibir variables
$id_nota=$_GET["id_nota"];
//logica sql
    $consulta1="select * from notas where id_nota='$id_nota'";
    $resultado1= mysqli_query($con,$consulta1);

    if($fila= mysqli_fetch_row($resultado1))
    {
        $consulta = "delete from  notas where id_nota='$id_nota'";
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




