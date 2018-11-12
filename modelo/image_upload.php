<?php
	include_once("conexion.php");

	$con = new conexion;

	foreach($_FILES['file']['name'] as $key=>$val){
	$upload_dir = "../vista/img/upload/";
	$upload_file = $upload_dir.$_FILES['file']['name'][$key];
	$filename = $_FILES['file']['name'][$key];
	if(move_uploaded_file($_FILES['file']['tmp_name'][$key],$upload_file)){
	$insert_sql = "INSERT INTO images(file_name,uploaded_on) VALUES ('".$filename."',NOW())";
	$resultado = $con->consulta($insert_sql);
	}
	}

	echo '<script>alert("Archivo subido y Guardado en la base de datos")</script>';
	echo "<script>window.location='./dashboard.php';</script>";
?>