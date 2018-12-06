<?php 
 
include("../conexion.php");

	$datos = array();

$consulta = "SELECT e.idevento, e.nombre, e.descripcion, e.fechainicio, e.fechafin, e.hora, e.lugar, e.idadm, a.usuario FROM evento e INNER JOIN administrador a ON a.idcodigoadm=e.idadm";

$con = new conexion;

$resultado = $con->consulta($consulta);

while ($row = $resultado->fetch_assoc()) {
	
	$datos[] = $row;

}

echo json_encode($datos);
 ?>