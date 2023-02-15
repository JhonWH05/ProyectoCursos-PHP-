
<?php
//pedir permiso(conexion)
include '../bdconexion.php';

//recibir variables

$codigo=$_GET["codigo"];
$valor=$_GET["valor"];
$plan=$_GET["plan"];
$id_estu=$_GET["id_estu"];

//logica sql
$consulta1 = "select * from  matricula where codigo='$codigo'";
$resultado1 = mysqli_query($con,$consulta1);
	
if ($fila= mysqli_fetch_row($resultado1)) 
{
 
		 $campos[]=array(  'respuesta'=>'-1');  //resutado1
}
else
{
	
	$consulta = "INSERT INTO matricula  VALUES ( '$codigo', '$valor', '$plan','$id_estu')";
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




