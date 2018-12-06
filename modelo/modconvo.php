<?php

include ("conexion.php");

$idconvo = $_POST['mid_convo'];
$nombre = $_POST['mnom_convo'];
$descrip = $_POST['mdesc_convo'];
$fechaini = $_POST['mfechini_convo'];
$fechafin = $_POST['mfechfin_convo'];
$hora = $_POST['mhora_convo'];
$lugar = $_POST['mlugar_convo'];
$area = $_POST['marea_convo'];
$idadm = $_POST['madm_convo'];

$fecha1 = date('Y-m-d',strtotime($fechaini));
$fecha2 = date('Y-m-d',strtotime($fechafin));

$con = new conexion;

$query = "UPDATE convocatoria SET nombre='$nombre',descripcion='$descrip',fechainicio='$fecha1',fechafin='$fecha2',hora='$hora',lugar='$lugar',idarea ='$area',idadm='$idadm' WHERE idconvocatoria ='$idconvo'";

$resultado = $con->consulta($query);

	if (!$resultado) {
		
		echo '<script>alert("Error al Modificar");
		window.history.go(-1);
		</script>';
		
	}
	else{

		
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();


?>
