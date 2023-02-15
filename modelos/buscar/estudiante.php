<?php
 	
 	include '../bdconexion.php';

 	$id=$_GET["id"];

 	$consulta1="select nombre, apellido, telefono, email from estudiante where id = '$id'";
 	$resultado1 = mysqli_query($con,$consulta1);

 	if($fila = mysqli_fetch_row($resultado1))
 	{ 		
 	$campos[]= array('respuesta'=>'1','nombre'=>$fila[0], 'apellido'=>$fila[1], 'telefono'=>$fila[2], 'email'=>$fila[3]);
 	}else{
 		$campos[]= array('respuesta'=>'-1');
 	}

 	echo json_encode($campos);


?>