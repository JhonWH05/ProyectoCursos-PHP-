<?php

include '../bdconexion.php';

		$query = "SELECT id_profesor, nombre, apellido, telefono FROM profesor";
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