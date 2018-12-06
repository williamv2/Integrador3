<?php 

	include('conexion.php');

	$idnoti = $_POST['del_idnot'];

	$con = new conexion;

		
		$delete = "DELETE FROM noticia WHERE idnoticia = '$idnoti'";

		$resultado = $con->consulta($delete);


		if(!$resultado){

			echo '<script>alert("Error al eliminar");
			window.history.go(-1);
			</script>';
		}
		else {
			
			
			echo "<script>window.location='./dashboard.php';</script>";
		}

		//cerrar conexion
		$con->cerrar();


 ?>