
<?php
//pedir permiso(conexion)
include '../bdconexion.php';

//recibir variables

$id=$_GET["id"];
$nombre=$_GET["nombre"];
$apellido=$_GET["apellido"];
$telefono=$_GET["telefono"];
$email=$_GET["email"];

//logica sql
$consulta1 = "select * from  estudiante where id='$id'";
$resultado1 = mysqli_query($con,$consulta1);
	
if ($fila= mysqli_fetch_row($resultado1)) 
{
 
		 $campos[]=array(  'respuesta'=>'-1');  //resutado1
}
else
{
	
	$consulta = "INSERT INTO estudiante  VALUES ( '$id', '$nombre', '$apellido','$telefono', '$email')";
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




