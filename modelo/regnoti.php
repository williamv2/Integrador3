<?php

include ("conexion.php");

$titulo = $_POST['nom_noti'];
$descrip = $_POST['desc_noti'];
$fecha = $_POST['fech_noti'];
$lugar = $_POST['lugar_noti'];
$idadm = $_POST['adm_noti'];
$idimg = $_POST['img_noti'];

$fecha1 = date('Y-m-d',strtotime($fecha));

$con = new conexion;

$query = "INSERT INTO noticia(nombre, descripcion, fecha, lugar, idadm, file_image) VALUES ('$titulo','$descrip','$fecha1','$lugar','$idadm','$idimg')";

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
