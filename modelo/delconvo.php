<?php 

	include('conexion.php');

	$idconvo = $_POST['del_idconvo'];

	$con = new conexion;

		
		$delete = "DELETE FROM convocatoria WHERE idconvocatoria = '$idconvo'";

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