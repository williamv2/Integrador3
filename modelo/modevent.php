<?php

include ("conexion.php");

$idevent = $_POST['mid_event'];
$nombre = $_POST['mnom_event'];
$descrip = $_POST['mdesc_event'];
$fechaini = $_POST['mfechini_event'];
$fechafin = $_POST['mfechfin_event'];
$hora = $_POST['mhora_event'];
$lugar = $_POST['mlugar_event'];
$idadm = $_POST['madm_event'];

$fecha1 = date('Y-m-d',strtotime($fechaini));
$fecha2 = date('Y-m-d',strtotime($fechafin));

$con = new conexion;

$query = "UPDATE evento SET nombre='$nombre',descripcion='$descrip',fechainicio='$fecha1',fechafin='$fecha2',hora='$hora',lugar='$lugar',idadm='$idadm' WHERE idevento ='$idevent'";

$resultado = $con->consulta($query);

	if (!$resultado) {
		
		echo '<script>alert("Error al Modificar");
		window.history.go(-1);
		</script>';
		
	}
	else{

		echo '<script>alert("Evento modificado exitosamente")</script>';
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();


?>
