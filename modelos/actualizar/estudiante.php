<?php
//pedir permiso(conexion)
include '../bdconexion.php';
//recibir variables
$id=$_GET["id"];
$nombre=$_GET["nombre"];
$apellido=$_GET["apellido"];
$telefono=$_GET["telefono"];
$email=$_GET["telefono"];


//logica sql
$consulta1="select * from estudiante where id='$id'";
$resultado1= mysqli_query($con,$consulta1);

//logica sql
if ($fila= mysqli_fetch_row($resultado1))
{ $consulta = "update estudiante set nombre='$nombre', apellido='$apellido', telefono='$telefono', email='$email' where id='$id'";

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




