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
$consulta1 = "select * from  notas where id_nota='$id_nota'";
$resultado1 = mysqli_query($con,$consulta1);
	
if ($fila= mysqli_fetch_row($resultado1)) 
{
 
		 $campos[]=array(  'respuesta'=>'-1');  //resutado1
}
else
{
	
	$consulta = "INSERT INTO notas  VALUES ( '$id_nota', '$id_alumno', '$id_curso', '$nota1', '$nota2', '$nota3')";
	//echo $consulta;
$resultado = mysqli_query($con,$consulta);

if($resultado==0)
	 $campos[]=array(  'respuesta'=>'0');//resutado2
else
		 $campos[]=array(  'respuesta'=>'1'); //resultado3

}

//retornar
echo json_encode($campos ); ;





?>




