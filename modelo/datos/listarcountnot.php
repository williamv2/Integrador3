<?php
	
	//Incluir archivo de la conexion
	include('../conexion.php');
	
	//Asignamos la funcion de conexion a una variable

	$con= new conexion;

	//Realizamos la consulta SQL para recuperar todos los registros de la tabla

	$cont = "SELECT COUNT(n.idnoticia) AS nnot FROM noticia n";

	$resultado= $con->consulta($cont);

	//Creamos una variable tipo array la cual almacenamos todos los registros

	$datos = array();

	//Iteramos todos los registros devueltos y llenamos el array

	while ($row = $resultado->fetch_assoc()) {
		
		$datos[] = $row;
	}

	//Convertimos el array al formato json y mostramos para que el angular JS pueda formatear la informacion

	echo json_encode($datos);

?>