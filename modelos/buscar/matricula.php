<?php
 	
 	include '../bdconexion.php';

 	$codigo=$_GET["codigo"];

 	$consulta1="select  valor, plan, id_estu from matricula where codigo = '$codigo'";
 	$resultado1 = mysqli_query($con,$consulta1);

 	if($fila = mysqli_fetch_row($resultado1))
 	{ 		
 	$campos[]= array('respuesta'=>'1','valor'=>$fila[0], 'plan'=>$fila[1], 'id_estu'=>$fila[2]);
 	}else{
 		$campos[]= array('respuesta'=>'-1');
 	}

 	echo json_encode($campos);


?>