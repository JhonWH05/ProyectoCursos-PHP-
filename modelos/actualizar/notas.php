<?php
//pedir permiso(conexion)
include '../bdconexion.php';
//recibir variables
$id_nota=$_GET["id_nota"];
$id_alumno=$_GET["id_alumno"];
$id_curso=$_GET["id_curso"];
$nota1=$_GET["nota1"];
$nota2=$_GET["nota2"];
$nota3=$_GET["nota3"];


//logica sql
$consulta1="select * from notas where id_nota='$id_nota'";
$resultado1= mysqli_query($con,$consulta1);

//logica sql
if ($fila= mysqli_fetch_row($resultado1))
{ $consulta = "update notas set id_alumno='$id_alumno', id_curso='$id_curso', nota1='$nota1', nota2='$nota2, nota3='$nota3' where id_nota='$id_nota'";

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




