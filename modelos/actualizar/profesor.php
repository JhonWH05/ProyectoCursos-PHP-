<?php
//pedir permiso(conexion)
include '../bdconexion.php';
//recibir variables
$id_profesor=$_GET["id_profesor"];
$nombre=$_GET["nombre"];
$apellido=$_GET["apellido"];
$telefono=$_GET["telefono"];

//logica sql
$consulta1="select * from profesor where id_profesor='$id_profesor'";
$resultado1= mysqli_query($con,$consulta1);

//logica sql
if ($fila= mysqli_fetch_row($resultado1))
{ $consulta = "update profesor set nombre='$nombre', apellido='$apellido', telefono='$telefono' where id_profesor='$id_profesor'";

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




