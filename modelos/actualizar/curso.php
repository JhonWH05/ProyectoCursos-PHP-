<?php
//pedir permiso(conexion)
include '../bdconexion.php';
//recibir variables
$id_curso=$_GET["id_curso"];
$nombre_curso=$_GET["nombre_curso"];
$id_prof=$_GET["id_prof"];


//logica sql
$consulta1="select * from curso where id_curso='$id_curso'";
$resultado1= mysqli_query($con,$consulta1);

//logica sql
if ($fila= mysqli_fetch_row($resultado1))
{ $consulta = "update curso set nombre_curso='$nombre_curso',id_prof='$id_prof' where id_curso='$id_curso'";

	$resultado = mysqli_query($con,$consulta);
	 if($resultado == 0)
	  $campos[]=array('respuesta'=>'0');//resultado2
	  else
	  $campos[]=array('respuesta'=>'1');//resultado3
	}
	else{
	    $campos[]=array('respuesta'=>'-1');
	}	

	echo json_encode($campos);;

	?>




