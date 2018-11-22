<?php 
 
include("../conexion.php");

	$datos = array();

$consulta = "SELECT c.idconvocatoria, c.nombre, c.descripcion, c.fechainicio, c.fechafin, c.hora, c.lugar, a.nombre AS area, `idadm` FROM convocatoria c INNER JOIN areadeporte a ON c.idarea = a.idareadep";

$con = new conexion;

$resultado = $con->consulta($consulta);

while ($row = $resultado->fetch_assoc()) {
	
	$datos[] = $row;

}

echo json_encode($datos);
 ?>