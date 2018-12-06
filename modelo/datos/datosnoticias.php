<?php 
 
include("../conexion.php");

	$datos = array();

$consulta = "SELECT n.idnoticia, n.nombre, n.descripcion, n.fecha, n.lugar, n.idadm, a.usuario, n.file_image FROM noticia n INNER JOIN administrador a ON a.idcodigoadm=n.idadm";

$con = new conexion;

$resultado = $con->consulta($consulta);

while ($row = $resultado->fetch_assoc()) {
	
	$datos[] = $row;

}

echo json_encode($datos);
 ?>