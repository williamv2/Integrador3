<?php

include ("conexion.php");

$nombre = $_POST['nom_event'];
$descrip = $_POST['desc_event'];
$fechaini = $_POST['fechini_event'];
$fechafin = $_POST['fechfin_event'];
$hora = $_POST['hora_event'];
$lugar = $_POST['lugar_event'];
$idadm = $_POST['adm_event'];

$fecha1 = date('Y-m-d',strtotime($fechaini));
$fecha2 = date('Y-m-d',strtotime($fechafin));

$con = new conexion;

$query = "INSERT INTO evento(nombre, descripcion, fechainicio, fechafin, hora, lugar, idadm) VALUES ('$nombre','$descrip','$fecha1','$fecha2','$hora','$lugar','$idadm')";

$resultado = $con->consulta($query);

	if (!$resultado) {
		
		echo '<script>alert("Error al registrar");
		window.history.go(-1);
		</script>';
		
	}
	else{

		
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();


?>
