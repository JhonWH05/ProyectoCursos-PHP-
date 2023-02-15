<?php
 	
 	include '../bdconexion.php';

 	$id_nota=$_GET["id_nota"];

 	$consulta1="select  id_alumno, id_curso, nota1, nota2,nota3 from notas where id_nota = '$id_nota'";
 	$resultado1 = mysqli_query($con,$consulta1);

 	if($fila = mysqli_fetch_row($resultado1))
 	{ 		
 	$campos[]= array('respuesta'=>'1','id_alumno'=>$fila[0], 'id_curso'=>$fila[1], 'nota1'=>$fila[2], 'nota2'=>$fila[3], 'nota3'=>$fila[4]);
 	}else{
 		$campos[]= array('respuesta'=>'-1');
 	}

 	echo json_encode($campos);


?>