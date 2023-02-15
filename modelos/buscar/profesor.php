<?php
 	
 	include '../bdconexion.php';

 	$id_profesor=$_GET["id_profesor"];

 	$consulta1="select nombre, apellido, telefono from profesor where id_profesor = '$id_profesor'";
 	$resultado1 = mysqli_query($con,$consulta1);

 	if($fila = mysqli_fetch_row($resultado1))
 	{ 		
 	$campos[]= array('respuesta'=>'1','nombre'=>$fila[0], 'apellido'=>$fila[1], 'telefono'=>$fila[2]);
 	}else{
 		$campos[]= array('respuesta'=>'-1');
 	}

 	echo json_encode($campos);


?>