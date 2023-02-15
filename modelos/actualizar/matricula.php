<?php
//pedir permiso(conexion)
include '../bdconexion.php';
//recibir variables
$codigo=$_GET["codigo"];
$valor=$_GET["valor"];
$plan=$_GET["plan"];
$id_estu=$_GET["id_estu"];


//logica sql
$consulta1="select * from matricula where codigo='$codigo'";
$resultado1= mysqli_query($con,$consulta1);

//logica sql
if ($fila= mysqli_fetch_row($resultado1))
{ $consulta = "update matricula set valor='$valor',plan='$plan' ,id_estu='$id_estu' where codigo='$codigo'";

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




