<?php 
 
include("../conexion.php");

	$datos = array();

$consulta = "SELECT * FROM noticia n";

$con = new conexion;

$resultado = $con->consulta($consulta);

while ($row = $resultado->fetch_assoc()) {
	
	$datos[] = $row;

}

echo json_encode($datos);
 ?>