<?php

include ("conexion.php");

$nombre = $_POST['nom_convo'];
$descrip = $_POST['desc_convo'];
$fechaini = $_POST['fechini_convo'];
$fechafin = $_POST['fechfin_convo'];
$hora = $_POST['hora_convo'];
$lugar = $_POST['lugar_convo'];
$area = $_POST['area_convo'];
$idadm = $_POST['adm_convo'];

$fecha1 = date('Y-m-d',strtotime($fechaini));
$fecha2 = date('Y-m-d',strtotime($fechafin));

$con = new conexion;

$query = "INSERT INTO convocatoria(nombre, descripcion, fechainicio, fechafin, hora, lugar, idarea, idadm) VALUES ('$nombre','$descrip','$fecha1','$fecha2','$hora','$lugar','$area','$idadm')";

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
