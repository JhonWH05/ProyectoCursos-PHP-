<?php
//pedir permiso(conexion)
include '../bdconexion.php';

//recibir variables

$id_profesor=$_GET["id_profesor"];
$nombre=$_GET["nombre"];
$apellido=$_GET["apellido"];
$telefono=$_GET["telefono"];

//logica sql
$consulta1 = "select * from  profesor where id_profesor='$id_profesor'";
$resultado1 = mysqli_query($con,$consulta1);
	
if ($fila= mysqli_fetch_row($resultado1)) 
{
 
		 $campos[]=array(  'respuesta'=>'-1');  //resutado1
}
else
{
	
	$consulta = "INSERT INTO profesor  VALUES ( '$id_profesor', '$nombre', '$apellido', '$telefono')";
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




