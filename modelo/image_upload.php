<?php
	include_once("conexion.php");

	$con = new conexion;

	/*echo "<script> console.log(".var_dump($_FILES['file']['type'][0]).");</script>";*/
	
	foreach($_FILES['file']['name'] as $key=>$val){
	if($_FILES['file']['type'][0] === "image/jpeg" || $_FILES['file']['type'][0] === "image/jpg" || $_FILES['file']['type'][0] === "image/png"){	
	$upload_dir = "../vista/img/upload/";
	$upload_file = $upload_dir.$_FILES['file']['name'][$key];
	$filename = $_FILES['file']['name'][$key];
	if(move_uploaded_file($_FILES['file']['tmp_name'][$key],$upload_file)){
	$insert_sql = "INSERT INTO images(file_name,uploaded_on) VALUES ('".$filename."',NOW())";
	$resultado = $con->consulta($insert_sql);
	}
	
	echo 'Archivo subido y Guardado en la base de datos';

	}

	else{
		
		echo 'Archivo no válido';

	}


	
	}

	
	

?>