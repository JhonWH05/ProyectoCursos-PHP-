<?php

include '../bdconexion.php';

		$query = "SELECT id_nota, id_alumno, id_curso, nota1, nota2, nota3  FROM notas";
		$resultado = mysqli_query($con,
		$query);

		if ( !$resultado){ 
		   die("Error");
		}else{ 
		   while( $data = mysqli_fetch_assoc($resultado))   { 
		      $arreglo      [ 
		         "data"
		      ]      [ 

		      ]      = array_map("utf8_encode",
		      $data);
		   }   echo json_encode($arreglo);
		}mysqli_free_result($resultado);
		mysqli_close($con);