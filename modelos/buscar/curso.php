<?php
 	
 	include '../bdconexion.php';

 	$id_curso=$_GET["id_curso"];

 	$consulta1="select  nombre_curso, id_prof from curso where id_curso = '$id_curso'";
 	$resultado1 = mysqli_query($con,$consulta1);

 	if($fila = mysqli_fetch_row($resultado1))
 	{ 		
 	$campos[]= array('respuesta'=>'1','nombre_curso'=>$fila[0], 'id_prof'=>$fila[1]);
 	}else{
 		$campos[]= array('respuesta'=>'-1');
 	}

 	echo json_encode($campos);


?>