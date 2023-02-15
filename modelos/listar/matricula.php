<?php

include '../bdconexion.php';

		$query = "SELECT codigo, valor,plan, id_estu FROM matricula";
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