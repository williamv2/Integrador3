<?php 
 
include("../conexion.php");

	$datos = array();

$consulta = "SELECT c.idconvocatoria, c.nombre, c.descripcion, c.fechainicio, c.fechafin, c.hora, c.lugar, a.nombre AS area, c.idadm, ad.usuario FROM convocatoria c INNER JOIN administrador ad ON ad.idcodigoadm=c.idadm INNER JOIN areadeporte a ON c.idarea = a.idareadep";

$con = new conexion;

$resultado = $con->consulta($consulta);

while ($row = $resultado->fetch_assoc()) {
	
	$datos[] = $row;

}

echo json_encode($datos);
 ?>