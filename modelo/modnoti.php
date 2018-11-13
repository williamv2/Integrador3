<?php

include ("conexion.php");

$idnot = $_POST['mid_noti'];
$titulo = $_POST['mnom_noti'];
$descrip = $_POST['mdesc_noti'];
$fecha = $_POST['mfech_noti'];
$lugar = $_POST['mlugar_noti'];
$idadm = $_POST['madm_noti'];


$fecha1 = date('Y-m-d',strtotime($fecha));

$con = new conexion;

$query = "UPDATE noticia SET nombre='$titulo',descripcion='$descrip',fecha='$fecha1',lugar='$lugar',idadm='$idadm' WHERE idnoticia='$idnot'";

$resultado = $con->consulta($query);

	if (!$resultado) {
		
		echo '<script>alert("Error al Modificar");
		window.history.go(-1);
		</script>';
	}
	else{

		echo '<script>alert("Noticia modificada exitosamente")</script>';
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();


?>